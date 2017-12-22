<?php
if (isset($_GET['URLS'])) {$id_url = $_GET['URLS'];}

$mons = array(1 => $mes['month1'], 2 => $mes['month2'], 3 => $mes['month3'], 4 => $mes['month4'], 5 => $mes['month5'], 6 => $mes['month6'], 7 => $mes['month7'], 8 => $mes['month8'], 9 => $mes['month9'], 10 => $mes['month10'], 11 => $mes['month11'], 12 => $mes['month12']);

if($_POST['lang']==''){$lg='ua';}else{$lg=substr($_POST['lang'], 0,2);}

	$result = $db->prepare("SELECT date, news_code, name_news_$lg, description_$lg,img_name,full_text_$lg
	,time,title_$lg, img_path, img_name
	FROM news WHERE news_code='$id_url'");
	$result->execute();
	$result->bind_result($s['date'],$s['urls'],$s['name_news'],$s['description'],$s['filename'],$s['text'],$s['time'],$s['title'],$s['img-min'],$s['img']);
	
	while ($result->fetch()) { $s['img_news'] = $s['img-min'].'/'.$s['img'];
								$date = new DateTime($s['date']);
								$s['date']=$date->format('d.m.y');
								
								$time = new DateTime($s['time']);
								$s['time']=$time->format('h:i');
								
				foreach($s as $key=>$k){			$rez[$key]=$k;	}
		
	$ReaNews=$rez; 
	}

	$result = $db->prepare("SELECT name_news_ua,name_news_ru,name_news_en FROM news WHERE news_code='$id_url'");
	$result->execute();
	$result->bind_result($rez['ua'],$rez['ru'],$rez['en']);  $rel='';
	 while ($result->fetch()) {
		 if(!empty($rez['ua'])){	$t1='uk';$t2='';  
			 $rel.='<link rel="alternate" hreflang="'.$t1.'" href="'. servername().'/'.$t2.'news/'.$rez['urls'].'/" />';
			}
		 if(!empty($rez['ru'])){ 	$t1=$t2='ru'; $t2.='/'; 
			 $rel.='<link rel="alternate" hreflang="'.$t1.'" href="'. servername().'/'.$t2.'news/'.$rez['urls'].'/" />';	
			 }
		 if(!empty($rez['en'])){ 	$t1=$t2='en'; $t2.='/';
			$rel.='<link rel="alternate" hreflang="'.$t1.'" href="'. servername().'/'.$t2.'news/'.$rez['urls'].'/" />';	
		 }
		
	}
	
	//echo '<pre>'; print_r($ReaNews); echo '</pre>'; 
	
		?>
		
<? /*head*/ HeadAdd($html=['title'=>$ReaNews['title'], 'description'=>$ReaNews['description'],
 'head'=>'Y', 
  'mata_img'=>$ReaNews['img_news'],
 'html'=>'
	<link rel="canonical" href="'.servername().$_SERVER['REQUEST_URI'].'"/>'.$rel]);	?>  
<div class="all_wrapper">

	<?php HeaderInclude();?>

	<main class="content" role="main">
		<div class="content__inner pages">
			<!-- NAVIGATION LINK on page-->
			<? include "includes/inc_nav-link.php"?>
			<!-- /END NAVIGATION LINK on page-->

			<!-- START page content code-->
			<div class="page page--current page-main">

				<? include "includes/inc_news-page.php"?>

			</div>
			<div class="page page-bottom">

				<? include "includes/inc_advantage.php"?>

			</div>
			<div class="page page-left">

				<? include "includes/inc_location.php"?>

			</div>
			<div class="page page-right">

				<? include "includes/inc_rooms-page.php"?>

			</div>
			<!--/END page content code-->

			<!--/END page content code-->

		</div>
		<!--/END content__inner-->
	</main>
	<!--/END content-->


<?php	 FooterAdd();		?>

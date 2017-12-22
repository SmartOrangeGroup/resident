<?session_start();?>
<html>
<head>
<style type="text/css">

</style>
<link rel="stylesheet" type="text/css" href="/css/style_pdf.css">
</head>
  <body>
 
<div class="midle">
<div class="ch-left">
 
  <div class="ch-sec ch-sec-tel" >
				<img class="logo-img logo-img-tel"   src="<?=$_SERVER['DOCUMENT_ROOT']."/img/pdf/tel-pdf.svg";?>">
 </div>
 
  <div class="ch-sec ch-sec-logo" >
				<img class="logo-img"   src="<?=$_SERVER['DOCUMENT_ROOT']."/img/logo2.svg";?>" alt="logo">
 </div>
 
			    <div class="ch-sec" style="padding-top:220px; padding-bottom:30px;">
				<div class="ch-sec-bg">
				    <p class="ch-text2"><?=$floor[0]?></p>
				 </div>
				     <p class="ch-text" ><?=$mes['pdf4-mes']?></p>
                </div>
				<div class="ch-sec" style="padding-bottom:30px;">
					<div class="ch-sec-bg">
				    <p class="ch-text2"><?=$number?></p>
				 </div>
				     <p class="ch-text" ><?=$mes['pdf3-mes']?></p>
				</div>
	
 </div>

 <div class="ch-center">
	
 <div class="ch-maplevel">	
 
		<? 
		//list($width, $height) = getimagesize($_SERVER['DOCUMENT_ROOT'].'/img/houses/house'.$plan.'_black/floor'.$floor[0].'/'.$pdf['img'].'.png');
		?>		
		
		<div class="center">
			 <p class="ch-text" ><?=$mes['План поверху']?></p>
		</div>
		<div class="ch-center-svg">
<? echo $svg_min_plan;

	
/*
<img class="img-center"  src="<?=$_SERVER['DOCUMENT_ROOT']?>/img/dom<?=$plan?>sec<?=$sec?>.png">*/
?>
	</div> 
		<div class="center" style="padding:10px 0 0;">
			 <p class="ch-text" ><?=$mes['План квартири']?></p>
		</div>
	<div class="center r_center" >
		<img class="img-center"  src="<?=$_SERVER['DOCUMENT_ROOT'].$img_flat?>">

    </div>
 </div> 
   

	 </div>
               
<div class="ch-right r_ch-right">
<div class="logo"><img class="logo-img-compas" style='transform: rotate(<?=$si['compas']?>deg);'  src="<?=$_SERVER['DOCUMENT_ROOT']."/img/pdf/compas-".(substr($_POST['lang'], 0, 2));?>.svg" alt="logo"> </div>


			<div class="ch-sec" style="padding-top:20px;">
				<div class="ch-sec-bg ">
                <p class="ch-text2 first-div"><?=$mes['apartments-parameters3']?></p>
				 </div>
				
            </div>
		 <?foreach($mas2 as $k=>$s){  if($s){ ?>	
			<div class="ch-sec">
				<div class="ch-sec-bg">
                <p class="ch-text2"><?=str_replace('.',',',$s);?> <span><?=$mes['м2']?></span></p>
				</div>
				  	<p class="ch-text" ><?=$mas1[$k]?></p>
             </div>
		 <?}}?>



    				
</div>
			<div class="clear"></div>
		<div class="block-foot">
			<div class="allright">

			 <img class="footer-img" src="<?=$_SERVER['DOCUMENT_ROOT']."/img/pdf/footer.svg"?>">
			 
            </div>
		</div>
</div>

	  <pagebreak/>
<?//1?>

</body>
</html>

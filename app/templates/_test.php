<?php Global $result;

	$result=array();
	$write=0;	
	$writeText='';
   
   ///***Пошук файлів в казаному каталозі**
   function glob_recursive($dir, $mask){ Global $result;
        foreach(glob($dir.'/*') as $filename){
                if(strtolower(substr($filename, strlen($filename)-strlen($mask), strlen($mask)))==strtolower($mask)) 
if ($filename==CashFile) {continue;}
					$result[$filename]=filemtime($filename);/* echo $filename."<br>";*/
                if(is_dir($filename)) glob_recursive($filename, $mask);
        }
	
	}

	///*** **
		foreach (ControlDir as $t){
			
			glob_recursive($t);
		}
		
	$cashFile = parse_ini_file(CashFile);	
	
	foreach($result as $key=>$t) {
		
		if (array_key_exists($key, $cashFile)) {
			if ($cashFile[$key]!=$t) {	$write=1;  echo '<pre>'; print_r($t.'  '.$cashFile[$key].'  '.$key.'<br>'); echo '</pre>';	}
		} else {$write=1;}
	
	$writeText.=$key."=".$t."\r\n";
	}
	
	//echo '<pre>'; print_r($cashFile); echo '</pre>';
	
	if ($write) {
		$fp = fopen(CashFile, "w"); // Открываем файл в режиме записи
		$test = fwrite($fp, $writeText); 
	}


	header("Cache-Control: public");
	header("Expires: " . date("r", time()+CashTime));
	
	if(!$write) {
		
	
		//	header('HTTP/1.1 304 Not Modified');
	 //  die; /* убили всё, что ниже */
	}
		
	//header('Last-Modified: '.gmdate('D, d M Y H:i:s', time()).' GMT');	
	
	
/*
$mytext = "fut-mes2='Разработка сайта'\r\n"; // Исходная строка
$test = fwrite($fp, $mytext); // Запись в файл
if ($test) echo 'Данные в файл успешно занесены.';
else echo 'Ошибка при записи в файл.';
fclose($fp); //Закрытие файла*/
?>
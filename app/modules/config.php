<?
$Server = "localhost";
$Login = "root";
$Password = "";
$DataBase = "resident_test";

$db = new MySQLi($Server, $Login, $Password, $DataBase);

$result = $db->query("Set charset utf8"); 
$result = $db->query("Set character_set_client = utf8");
$result = $db->query("Set character_set_connection = utf8");
$result = $db->query("Set character_set_results = utf8");
$result = $db->query("Set collation_connection = utf8_general_ci");

if (mysqli_connect_errno()) {
   printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
   exit;
}

global $site_url,$len_default, $len; $site_url='http://resident.house';
global $section_floor_url;	$section_floor_url='section1/floor2';

$len_default='ua';
$len=array('en','ru');
$OPTIONS=array('MINFLOOR'=>2,'MAXFLOOR'=>13); 

define(Cash, false);            
define(CashFile,'modules/inc/cash.ini'); 
define(CashTime, 10800);
define(ControlDir, array('modules', 'includes','js','css'));
define(NotCashlFile, array('templates/news.php')); 


?>
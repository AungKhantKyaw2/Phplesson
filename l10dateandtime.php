<?php
//1 Jan 1970 UTC

date_default_timezone_set('Asia/Yangon');
$getdate=getdate();

echo $getdate;
var_dump($getdate);
echo "<pre>".print_r($getdate,false) ."</pre>";

echo "This is seconds=".$getdate["seconds"];
echo "This is minutes=".$getdate["seconds"];
echo "This is hours=".$getdate["hours"];

echo "This is weekday=".$getdate["weekday"];//
echo "This is wday=".$getdate["wday"];// 0 =sun 1=monday
echo "This is yday=".$getdate["yday"];//66 day of the year


echo "This is month=".$getdate["month"];//March
echo "This is mon=".$getdate["mon"];//3
echo "This is wdaay=".$getdate["mday"];//8


echo "This is year=".$getdate["year"];//2025


echo "This is 0 nowtime=".$getdate["0"];//1741429154

$time =time();

echo "This is 0 =".$time; //1741429154


//DaTE/TIme Format

// date(format,timestampe);
$time =time();

$date =date("a",$time);
echo "This is format a=" .$date;//am pm

$date =date("A",$time);
echo "This is format A=" .$date;//Am Pm

$date =date("d",$time);
echo "This is format d=" .$date;//This is format d=08

$date =date("D",$time);
echo "This is format D=" .$date;//This is format D=Sat ,Tue Mon


$date =date("F",$time);
echo "This is format F=" .$date; //March

$date =date("g",$time);
echo "This is format g=" .$date;//10 //hours no leading zero 12hr

$date =date("G",$time);
echo "This is format G=" .$date;//17// no hours leading zero 24 hr


$date =date("h",$time);
echo "This is format h=" .$date;//10 //hours  leading zero 12hr

$date =date("i",$time);
echo "This is format i=" .$date;//24// minute


$date =date("j",$time);
echo "This is format j=" .$date;//8// day of month no leading 0



$date =date("l",$time);
echo "This is format l=" .$date;// Sat


$date =date("L",$time);
echo "This is format L=" .$date;// S  //Leap year(1=true, 0=false)

$date =date("l",$time);
echo "This is format l=" .$date;// Sat


$date =date("m",$time);
echo "This is format m=" .$date;// 03 // day of month leading 0


$date =date("M",$time);
echo "This is format M=" .$date;// This is format M=Mar

$date =date("n",$time);
echo "This is format n=" .$date;// 03 // day of month no leading 0

$date =date("r",$time);
echo "This is format r=" .$date;// 03 //This is format r=Sat, 08 Mar 2025 17:30:17 +0630



$date =date("s",$time);
echo "This is format s=" .$date;//This is format s=20 seconds

$date =date("U",$time);
echo "This is format U=" .$date;//This is format U=1741431774 miliseconds

$date =date("y",$time);
echo "This is format y=" .$date; // year //24

$date =date("Y",$time);
echo "This is format y=" .$date; //year//2024

$date =date("y",$time);
echo "This is format y=" .$date; // year //24

$date =date("z",$time);
echo "This is format z=" .$date; //This is format z=66 // day of the year
?>




<!-- https://www.php.net/manual/en/timezones.asia.php -->
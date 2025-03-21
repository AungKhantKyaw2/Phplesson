<?php

$words ="Save Myanmar";
echo strlen($words);

//=>str_word_count(string) Function
//=>str_word_count(string,return) Function

//0-Default(string)
//1 -Return an array count word as array
//2 - Return an array count character position as array

$text="Save Myanmar Country";
echo str_word_count($text);//3

echo str_word_count($text,0);//3
echo "<pre>".print_r(str_word_count($text,1),true)."</pre>";
echo "<pre>".print_r(str_word_count($text,2),true)."</pre>";


//=>ucwords(string) Function
//=>ucwords(string,delimiters) Function

$country = "Weclome to myanar country,i live in Yangon";
echo ucwords($country);//Weclome To Myanar Country,i Live In Yangon
echo ucwords($country,",");//Weclome to myanar country,I live in Yangon

//ucfirst(string)Function

$message ="welcome to yangon,i live in tamwe";
echo ucfirst($message);//Welcome to yangon,i live in tamwe

//=>lcfirst(string) Function

$msg = "Welcome to Yangon , I live in tamwe";
echo lcfirst($msg);//Welcome to Yangon, I live in tamwe

//=>strtoupper(string) Function
$string = "welcome to my country";
echo strtoupper($string);//WELCOME TO MY COUNTRY

//=>strtolower(string) Function
$string = "WELCOME to My Country";
echo strtolower($string);//welcome to my country

//=>Chunk_split(string,length,delimiter) Function
$letters ="Myanmar Country";
echo chunk_split($letters,1,".");//M.y.a.n.m.a.r. .C.o.u.n.t.r.y
echo chunk_split($letters,3,".");//Mya.nma.r C.oun.try.

//=>substr(string,start index/offset,end length) Function
$country = "Welcome Myanmar";
echo substr($country,0);//Welcome Myanmar
echo substr($country,8);//Myanmar
echo substr($country,0,7);//Welcome
echo substr($country,0,9);//Welcome M


//=>strpos(sting,find)Function
//=>strrpos(string,find) Function  Reverse finding
//stripos(string,find) Function
//=>strripos(string,find) Function

$captions ="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Ipsum";
echo strpos($captions,"Ipsum");//6 (index number)
echo strrpos($captions,"Ipsum");//75  (index number)
echo stripos($captions,"ipsum");// 6   (index number)                    Case Senstive problem solving (ipsum)
echo strripos($captions,"ipsum");// 75  (index number)                    Case Senstive problem solving(ipsum)

//=> str_replace(search,replace,string) Function


$topic ="Save Myanmar";
echo str_replace("Myanmar","CRPH",$topic);// Save Crph


// substr_replace(string,replace,start index) Function
// substr_replace(string,replace,start index,end length) Function


$greeting ="Welcome Myanmar";
echo substr_replace($greeting,"Hello",0);//Hello
echo substr_replace($greeting,"Thailand",8);//Welcome Thailand
echo substr_replace($greeting,"Hello",0,0);//HelloWelcome Myanmar
echo substr_replace($greeting,"Hello",0,3);//Hellocome Myanmar
echo substr_replace($greeting,"Hello",0,7);//Hello Myanmar


// =>trim() Function
// trim(string,characters) Function

$title = " Welcome to My country";
echo trim($title);//Welcome to My country

$subtitle= "Welcome to My country";
echo trim($subtitle,"Wel");//come to My country
echo trim($subtitle,"try");//Welcome to My coun

?>
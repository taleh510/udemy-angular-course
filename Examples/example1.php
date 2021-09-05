<?php
$bir="talehmehrrem85@gmail.com";
// $strp=strpos($bir,"@");
//  if ($strp==true){
//      echo "True";
//  }
// echo $subst=substr($bir,5,7);
// echo substr_replace($bir,"salam",5);
// print substr_replace('My pet is a blue dog.','Title: ',0,0);
// for ($i=0;$i<strlen($bir);$i++){
// substr('aeiouAEIOU',$bir[$i]);
// }
$string = "This weekend, I'm going shopping for a pet chicken.";
$vowels = 0;
for ($i = 0, $j = strlen($string); $i < $j; $i++) {
 if (strstr('aeiouAEIOU',$string[$i])) {
 $vowels++;
 print $vowels;
 }
}


<?php 
$number = 40;

if($number > 0){
     //echo "Number is getter than 0";
  if($number >50){
     //echo "Number is getter than 50";
     if($number > 60){
         echo "Number is getter than 60";
     }else{
         echo "Number is less then or equal 60";
     }
  }else{
    echo "Number is less than or equal 50";
  }
   
}else{
    echo "Number is less than or equal 0";
}

echo "<br/>";


if($number >60){
    echo "number is getter than 60"; 
} else if($number > 0 &&  $number <=50){
    echo "Number is less than or equal 50";
}else {
    echo "number is less  than or equal 0 ";
}

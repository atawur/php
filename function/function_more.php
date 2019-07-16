<?php

/*
echo "Number between 1 to 10<br>";
$i=0;
for ($i;$i<=10;$i++){
    echo $i."<br>";
}


echo "Number between 80 to 90<br>";
$i=11;
for ($i;$i<=90;$i++){
    echo $i."<br>";
}


echo "Number between 100 to 300<br>";
$i=100;
for ($i;$i<=300;$i++){
    echo $i."<br>";
}*/

print_number('st',10);
print_number(80,90);
print_number(100,300);

/*
function print_number(int $starting_numebr,int $ending_Number){

    echo "Number between $starting_numebr to $ending_Number<br>";
    for($i=$starting_numebr;$i<=$ending_Number;$i++){
        echo $i."<br>";
    }

}*/

function print_number($starting_numebr,$ending_Number){

    if(gettype($starting_numebr)=='integer' && (gettype($ending_Number)=='integer' )){

        echo "Number between $starting_numebr to $ending_Number<br>";
        for($i=$starting_numebr;$i<=$ending_Number;$i++){
            echo $i."<br>";
        }
    }else{
        echo "Please provide interger type data<br>";
    }   
}

echo "<br>Result".sum(10,11);

function sum(int $fist_number, int $second_number) : int{

    $result = $fist_number+$second_number;
    //return "hello";
    return $result;

}


?>
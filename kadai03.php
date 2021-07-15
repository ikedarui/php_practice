<?php
echo 'hello php!';
$name = "池田琉生";
if($name !="池田琉生"){
 echo "池田琉生ではありません";
} else{
   echo "私は池田琉生です";
}



for ($i = 0; $i <= 10000; $i++){
   $total += $i;
}
echo $total;



$fruits = array("apple","orange","banana","mango","grape");
foreach($fruits as $fruit){
  echo "要素は" . $fruit;
  echo "\n";
}



/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 101;

for($i = $start; $i < $end; $i++){

// 5で割り切れたら{}内を実行する
   if($i % 5 == 0){
      echo $i;
      echo "\n";
   }
}

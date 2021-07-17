<?php
function nibai($num){
    return $num * 2;
}
echo nibai(6) . "\n";



function add($a,$b){
  return $a + $b;
}

echo add (86,57)."\n";



$arr = array(1,3,5,7,9);
//echo array_product( $arr );
$result = 1;
foreach($arr as $num){
  $result*= $num;
}
echo $result;



function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $num){
 //どうしたらいいかわからない・・・・
     if ($max_number <$num){
         $max_number = $num;
     }
 }
 return $max_number;
 }
//     echo $max_number;変数のスコープ外なので$max_numberにアクセス出来ません。
echo max_array([1,3,5,7,4,2]);


//strip_tags 文字列から HTML および PHP タグを取り除く
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

// <p> と <a> は許可します
echo strip_tags($text, '<p><a>');

// PHP 7.4.0 以降では、上の行は以下のように書けます:
// echo strip_tags($text, ['p', 'a']);



//array_push 一つ以上の要素を配列の最後に追加する
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);



//$array_marge ひとつまたは複数の配列をマージする
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);



//time,mktime 日付を Unix のタイムスタンプとして取得する
// デフォルトのタイムゾーンを設定します。
date_default_timezone_set('UTC');

// 出力: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

// 出力例: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006));




//date ローカルの日付/時刻を書式化する
// 使用するデフォルトのタイムゾーンを指定します。
date_default_timezone_set('UTC');


// 結果は、たとえば Monday のようになります。
echo date("l");

// 結果は、たとえば Monday 8th of August 2005 03:12:46 PM のようになります。
echo date('l jS \of F Y h:i:s A');

// 結果は July 1, 2000 is on a Saturday となります。
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

/* 書式指定パラメータに、定数を使用します。 */
// 結果は、たとえば Wed, 25 Sep 2013 15:28:57 -0700 のようになります。
echo date(DATE_RFC2822);

// 結果は、たとえば 2000-07-01T00:00:00+00:00 のようになります。
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
?>
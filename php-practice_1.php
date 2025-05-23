<?php
// Q1 変数と文字列 変数に自分の名前を格納したのち、文字列結合を使って表示
$name = '岩嶋';

echo '私の名前は「' .$name. '」です。';

/* Q2 四則演算
$numという変数に、5 と 4 をかけた値を格納して表示してください。
さらにその値を 2 で割った結果も表示してください。*/

$num = 5*4;

echo ($num ."\n");
echo ($num/2);

// Q3 日付操作 PHPのdate関数を使って現在時刻を取得し、文字列結合を使用して下記のように表示してください。
date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は' .date('Y年m月d日 H時i分s秒') ."です。";


/* Q4 条件分岐-1 if文
下記の条件のもとで文字列を出し分ける処理をif文を使って作成してください。

条件
$deviceに任意の文字列を格納してください。
$deviceの値が「windows」だったら、「使用OSは、windowsです。」と表示。
$deviceの値が「mac」だったら、「使用OSは、macです。」と表示。
$deviceの値が上記2つ以外だったら、「どちらでもありません。」と表示。
但し、ifとelseのみを使用して処理を作成してください。（elseif は使わないでください）*/

/*
$device = 'windows';

if ($device === "windows" || $device === "mac"){

    if($device === "windows"){
        echo '使用OSはwindowsです。';
    }else{
        echo '使用OSはmacです。';
    }
    
}else{
    echo 'どちらでもありません。';
    
}
*/
//ifとelseは1回のみ
$device = 'mac';

if ($device === "windows" || $device === "mac"){

    echo ($device === "windows") ? '使用OSはwindowsです。' : '使用OSはmacです。';
    
}else{
    echo 'どちらでもありません。';
    
}



/* Q5 条件分岐-2 三項演算子
$ageという変数に任意の数値を格納してください。そして下記の条件のもとで文字列を出し分ける処理を三項演算子を使って作成してください。
条件
$ageが18未満だったら、「未成年です。」と表示。
$ageが18以上だったら、「成人です。」と表示。*/

$age = 18;

echo ($age <18) ? '未成年です' : '成人です';


/* Q6 配列
関東の都・県を格納した配列を作成し、3番目と4番目の値を以下のように表示してください。
出力例
栃木県と千葉県は関東地方の都道府県です。*/

$kanto = ['東京都','神奈川県','栃木県','千葉県','埼玉県','茨城県','群馬県'];

echo $kanto[2] .'と' .$kanto[3] .'は関東地方の都道府県です。';

/* Q7 連想配列-1
関東の都・県をキー、それぞれの県庁所在地をバリューとする連想配列を作成し、バリューを全て表示
但し、縦に並んで表示されるようにしてください。*/

$kanto = ['東京都'=>'新宿','神奈川県'=>'横浜市','千葉県'=>'千葉市','埼玉県'=>'さいたま市','栃木県'=>'宇都宮市','群馬県'=>'前橋市','茨城県'=>'水戸市'];

foreach($kanto as $capital){
  echo ($capital ."\n");
}

/* Q8 連想配列-2
上記で作成した連想配列とif文を使用して下記の文章のみを出力してください。
(県名と県庁所在地は連想配列のキー, バリューを使用して表示してください。)
出力結果
埼玉県の県庁所在地は、さいたま市です。*/

foreach ($kanto as $prefecture =>$capital){
  if($prefecture === '埼玉県'){
    echo $prefecture .'の県庁所在地は' .$capital .'です。';
  }
}


/* Q9 連想配列-3
上記で作成した連想配列に、関東以外の都道府県を2つ追加し下記の条件のもと表示してください。(都道府県名をキー, 県庁所在地をバリューとしてください)
条件
関東地方以外の都道府県については、「〜は関東地方ではありません。」と表示。
関東地方の都道府県については、「〜の県庁所在地は、〜です。」と表示。
if文については、elseifは使用せずifとelseのみで処理を記述。
1文ずつ改行して縦に表示されるように処理を記述。
*/

$kanto ['香川県']='高松市';
$kanto ['兵庫県']='神戸市'; 
/*
$kantonly =['東京都','神奈川県','千葉県','埼玉県','栃木県','群馬県','茨城県'];

foreach($kanto as $prefecture =>$capital){
  if(in_array($prefecture,$kantonly)){
    echo $prefecture ."の県庁所在地は、" .$capital ."です。\n";
  }else{
    echo $prefecture  ."は関東地方ではありません。\n";
  }
}
*/

//新しく変数を作らない場合　1
foreach($kanto as $prefecture =>$capital){
  if(in_array($prefecture,['東京都','神奈川県','千葉県','埼玉県','栃木県','群馬県','茨城県']))
  {
    echo $prefecture ."の県庁所在地は、" .$capital ."です。\n";
  }else{
    echo $prefecture  ."は関東地方ではありません。\n";
  }
}
//新しく変数を追加しない場合　2
foreach($kanto as $prefecture =>$capital){
  if($prefecture ==='東京都'||$prefecture ==='神奈川県'||
    $prefecture ==='千葉県'||$prefecture ==='埼玉県'||
    $prefecture ==='栃木県'||$prefecture ==='群馬県'||
    $prefecture ==='茨城県')
  {
    echo $prefecture ."の県庁所在地は、" .$capital ."です。\n";
  }else{
    echo $prefecture  ."は関東地方ではありません。\n";
  }
}


/*
foreach($kanto as $prefecture =>$capital){
  if($prefecture !=='香川県'&& $prefecture !=='兵庫県')
  {
    echo $prefecture ."の県庁所在地は、" .$capital ."です。\n";
  }else{
    echo $prefecture  ."は関東地方ではありません。\n";
  }
}
  */

foreach($kanto as $prefecture =>$capital)
{
if(in_array($prefecture,['東京都','神奈川県','千葉県','埼玉県','栃木県','群馬県','茨城県']))
  {
    echo $prefecture ."の県庁所在地は、" .$capital ."です。\n";
  }else{
    echo $prefecture  ."は関東地方ではありません。\n";
  }
}



/* Q10 関数-1
引数に名前を受け取って、「〜さん、こんにちは。」という文字列を返す 
hello という名前の関数を作成してください。
そしてその hello関数を実行して文章を2つ表示してください。
条件
hello関数の引数に名前を渡して実行し、その返り値をechoしてください。
引数に渡す名前は任意で構いません。
引数として渡す値を変えて2回実行することで2つの文章を表示しましょう。*/

function hello($name){
  echo $name ."さん、こんにちは。\n";
}

hello('金谷');
hello('安藤');


/* Q11 関数-2
消費税込み価格を計算する関数を作成します。以下の条件のもと、下記のように税込価格を表示しましょう。

条件
税抜き価格を引数に受け取って税込価格に変換して返す関数を、calcTaxInPrice という名前で定義してください。
消費税は 10% として計算してください。
税抜き価格を変数$priceとして定義し、それを関数に渡して実行しましょう。
関数を実行した返り値を、変数$taxInPriceに代入してください。
最終的に、文章を表示してください。*/

function calcTaxInPrice($price){
  return $price*1.1;
}

$price=1000;
$taxInPrice = calcTaxInPrice($price);

echo $price .'円の商品の税込み価格は' .$taxInPrice .'です。';


/* Q12 関数とif文
数字を奇数か偶数か判別する関数を作成します。条件のもと処理を記述しましょう。

条件
関数名は、distinguishNum という名前で定義してください。
引数として受け取った数字が奇数だったら、「〜は奇数です。」という文字列を返り値として返してください。
引数として受け取った数字が偶数だったら、「〜は偶数です。」という文字列を返り値として返してください。
奇数と偶数それぞれを渡して実行して、結果を表示してください。*/

function distinguishNum($num){
  if($num%2 == 1){
    return $num .'は奇数です。';
  }else{
    return $num .'は偶数です。';
  }
}

echo distinguishNum(11) ."\n";

echo distinguishNum(24);


/* Q13 関数とswitch文
switch文を使用して、成績の評価を出し分ける関数を作成します。下記の条件に沿って処理を記述してください。

条件
関数名は、evaluateGrade という名前で定義してください。
swtich文を使って引数で受け取った成績(文字列)に応じて処理を分けてください。
成績が、A か B だったら「合格です。」という文字列を返り値として返す。
成績が、C だったら「合格ですが追加課題があります。」という文字列を返り値として返す。
成績が、D だったら「不合格です。」という文字列を返り値として返す。
その他の文字列だった場合は、「判定不明です。講師に問い合わせてください。」という文字列を返り値として返す。
evaluateGrade関数に任意の引数を渡して実行して、結果を2種類表示してください*/

function evaluateGrade($grade){

  switch($grade){
    case 'A':
    case 'B':
      return "合格です。\n";

    case 'C':
      return "合格ですが追加課題があります。\n";
    
    case 'D':
      return "不合格です。\n" ;
    
    default:
      return "判定不明です。講師に問い合わせてください。\n";
  }

}

echo evaluateGrade('A');
echo evaluateGrade('d');

?>
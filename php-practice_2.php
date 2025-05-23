<?php
/* Q1 tic-tac問題
1から100までの数字について以下の条件に沿って表示してください。
条件
1から100までの数字について処理を実行する。
4の倍数のときは tic を出力。
5の倍数のときは tac を出力。
4の倍数かつ5の倍数のときは tic-tac を出力。
上記以外の数のときはそのままその数字を出力する。
出力結果が以下の通り縦に並ぶようにしてください。
*/
  echo "1から100までのカウントを開始します \n";
  echo "\n";

  for($i=1; $i<=100; $i++)
  {
    if($i%20==0){
      echo "tic-tac \n";
    }
    elseif($i%4==0){
      echo "tic \n";
    }
    elseif($i%5==0){
      echo "tac \n";
    }else{
      echo $i ."\n";
    }
  }  

// Q2 多次元連想配列
/*問題1
下記の配列を用いて下記のように表示してください。
出力結果
Bさんの電話番号は08033334444です。
*/

$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

var_dump($personalInfos);
echo $personalInfos[1]['name'] .'の電話番号は' .$personalInfos[1]['tel'] .'です。';

/*問題2
foreachを用いて下記のように表示してください。(数字が1から始まっていることに注意しましょう)
出力結果
1番目のAさんのメールアドレスはaaa@mail.comで、電話番号は09011112222です。
2番目のBさんのメールアドレスはbbb@mail.comで、電話番号は08033334444です。
3番目のCさんのメールアドレスはccc@mail.comで、電話番号は09055556666です。
*/

foreach($personalInfos as $person=> $person_detail)
{
  echo ($person+1) .'番目の' .$person_detail['name']."のメールアドレスは" .
  $person_detail['mail'] .'で、電話番号は'.$person_detail['tel'] ."です。\n";
}

/*問題3
下記の$ageListを使用して、$personalinfosに age というKeyに対して$ageListのそれぞれの年齢をValueとして追加してください。
その際は、foreachを使用してください。
追加ができたらvar_dumpを使用して配列の中身を確認してください。
*/

$ageList = [25, 30, 18];

foreach ($ageList as $index=> $age)
{
  $personalInfos[$index]['age']= $age;
} 

var_dump($personalInfos);


/* Q3 オブジェクト-1
以下のクラスのプロパティを使って、条件に一致するような文章を表示してください。
条件
studentIdプロパティは正の整数を設定してください。
nameプロパティは任意の値を設定してください。
出力例
学籍番号120番の生徒は山田です。
*/

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($language)
    {
        //echo '授業に出席しました。';　(もともとのattendメソッドの処理)
        echo  $this->studentName .'は' .$language .'の授業に出席しました。'.
        '学籍番号：' .$this->studentId;
    }
}

$yamada = new Student(120,'山田');
echo '学生番号' .$yamada->studentId .'番の生徒は' .$yamada->studentName .'です。';


/* Q4 オブジェクト-2
引き続きQ3で使用したクラスを使用します。
attendメソッドの処理を書き換えて、条件に沿った内容を表示してください。
条件
attendメソッド以外は書き換えないでください。
出力例
山田はPHPの授業に参加しました。学籍番号：120
*/
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1 1ヶ月前の日付を表すDateTimeインスタンスを作成し、出力結果と同じフォーマットで出力しましょう。
$date = new DateTime();
$date->modify('-1 month');
echo $date->format('Y-m-d');

//問題2 今日の日付と1992年4月25日との日付の差を計算して、総日数を出力しましょう。
$date1 = new DateTime();
$date2 = new DateTime('1992-4-25');
$diff = $date1->diff($date2);
echo 'あの日から' .$diff->format('%a') .'日経過しました。';

?>
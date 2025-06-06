<?php
// Q1 tic-tac問題
for($i = 1; $i <= 100; $i++){
  if ($i % 4 == 0 && $i % 5 == 0){
    echo 'tic-tac ' . "\n";
  } elseif ($i % 4 == 0){
    echo 'tic' . "\n";
  } elseif ($i % 5 == 0){
    echo 'tac' . "\n";
  } else {
    echo $i . "\n";
  }

}

// Q2 多次元連想配列
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

// Q2-1
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

// Q2-2
foreach ($personalInfos as $number => $infos){
    $n = $number + 1;
    echo $n . '番目の' . $infos['name'] . 'のメールアドレスは' . $infos['mail'] . 'で、電話番号は' . $infos['tel'] . 'です。' . "\n";
}

    // Q2-3
$ageList = [25, 30, 18];
foreach ($personalInfos as $number =>$infos){
    $personalInfos[$number]['age']=$ageList[$number];
}
var_dump($personalInfos);


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }
    public function attend($subject)
    {
        echo $this->studentName . 'は' . $subject . 'の授業に参加しました。学籍番号:' . $this->studentId;
    }
}

// Q3
$yamada = new Student(22 , '山田');
echo '学籍番号' . $yamada-> studentId . '番の生徒は' . $yamada->studentName . 'です。';

// Q4 オブジェクト-2

echo $yamada->attend('PHP');

// Q5 定義済みクラス
// Q5-1
$pastMonth = new DateTime();
$pastMont->modify('-30days');
echo $pastMonth->format('Y-m-d');

// Q5-2
$currentDate = new DateTime ();
$pastDate = new DateTime ('1992-04-25');
$days = $currentDate->diff($pastDate);
echo 'あの日から' . $days->days . '日経過しました。';


?>
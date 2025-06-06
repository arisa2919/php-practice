<?php
// Q1 変数と文字列
$name = '宮島';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
$num2 = $num / 2;
echo $num ."\n" . $num2;

// Q3 日付操作
$currentTime = new DateTime();
$currentTime->setTimezone(new DateTimezone('Asia/Tokyo'));
echo $currentTime->format('Y年m月d日 H時i分s秒');

// Q4 条件分岐-1 if文

$device = 'windows';
if ($device == 'windows' || $device == 'mac'){
  echo '使用OSは、' . $device . 'です。'; 
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 22;
$adult = ($age >= 18) ? '成人です' : '未成年です。';
echo $adult;

// Q6 配列 
$areas = ['東京都','神奈川県','栃木県','千葉県','茨城県','群馬県','埼玉県'];

// Q7 連想配列-1
$cities = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
];

foreach ($cities as $key => $city){
  echo $city . "\n";
}

// Q8 連想配列-2
echo $areas[6] . 'の県庁所在地は、' . $cities['埼玉県'] . 'です。';

// Q9 連想配列-3
$cities['大阪府'] = '大阪市';
$cities['京都府'] = '京都市';

foreach ($cities as $key => $city){
  if ($city == '大阪市' || $city == '京都市'){
    echo $key . 'は関東地方ではありません。' . "\n";
  } else {
    echo $key . 'の県庁所在地は、' . $city . 'です。' . "\n";
  }
}

// Q10 関数-1
function hello($name)
{
  echo $name .'さん、こんにちは。';
}
hello('金谷');
echo "\n";
hello('安藤');


// Q11 関数-2
function calcTaxInPrice($price){
    $tax = 1.1;
    return $price * $tax;
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';



// Q12 関数とif文
function distinguishNum($number){
  if ($number % 2 !== 0){
    return $number . 'は奇数です。';
  } else {
    return $number . 'は偶数です。';
  }
}
echo distinguishNum(2);
echo distinguishNum(3);

// Q13 関数とswitch文
function evaluateGrade($score){
  switch ($score){
    case 'A':
    case 'B':
     return '合格です。';
     break;
    
    case 'C':
      return '合格ですが追加課題があります。';
      break;
    
    case 'D':
      return '不合格です。';
      break;
    
    default:
      return '判定不明です。講師に問い合わせてください。';
      break;
    
  }
}

echo evaluateGrade('A') . "\n" . evaluateGrade('D');

?>
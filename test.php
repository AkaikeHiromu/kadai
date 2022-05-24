<?php
class Person {
	// 名前
	public $name = '';
	// 生年月日(年/月/日)
	public $birthday = '';
	// 性別(m:男性, f:女性)
	public $gender = '';

  //各情報を初期化している
	public function __construct($name,$birthday,$gender){
		$this->name = $name;
		$this->birthday = $birthday;
		$this->gender = $gender;
	}

	// 自己紹介文を生成
	public function selfIntroduction(){
		if($this->gender == 'm'){
			$gendata = '男性';
		}else if($this->gender == 'f'){
			$gendata = '女性';
		}else{
			$gendata = '[性別は不明]';
		}
		return 'わたしは' . $this->name . '、' . $this->birthday . '生まれ、' . $gendata . 'です。';
	}

	//現在の年齢を出すメソッド
	public function getAge($birthday){
		$now = new DateTime();
		echo $now->format('Ymd')."\n";
		//データ型を文字型に変換して代入している
		$strnow = $now->format('Ymd');
		//現在の年月日を出力
		echo '今日の年月日は'.$strnow.'です'."\n";
		//今の時間から月日だけを取り出す
		$nowmonth_and_day = substr($strnow,4,4);
		//今の時間から西暦だけを取り出す
		$strnow = substr($strnow,0,4);
		//現在の西暦出力
		echo "今年は".$strnow."\n";
		//現在の月日を出力
		echo "今日は".$nowmonth_and_day."\n";
		//誕生月日だけを取り出す
		$month_and_day = substr($this->birthday,4,4);
		//生年月日から西暦だけを取り出す
		$ad = substr($this->birthday,0,4);
		//誕生月日を出力
		echo "誕生月日は".$month_and_day."です"."\n";
		//生まれ年出力
		echo "生まれ年は".$ad."\n";
		//現在の年齢から生年月日を引いて年齢を割り出す
		$age = (int)$strnow - (int)$ad;
		//$this->birthdayの型を調べている
		//echo gettype($this->birthday);//mixedの部分型説明をしている mixedなんでも良いという意味
		//誕生日を迎えているか判定
		$age_decision = (int)$nowmonth_and_day - (int)$month_and_day;
		//誕生日を迎えてなかったら満年齢から1を引く
		if($age_decision < 0){
			$age--;
		}
		echo $age."才です";

	}
}

$mypro = new person("ひろむ","20190718","m");
//名前出力
echo $mypro->name;
//生年月日出力
echo $mypro->birthday;
//性別出力
echo $mypro->gender;
//自己紹介文作成
echo $mypro->selfIntroduction();
echo $mypro->getAge($mypro -> birthday)."\n";//()の中身は引数としてmyproの中のbirthdayを渡している。

?>

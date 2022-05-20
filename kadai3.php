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
		echo $now->format('Ymd');
		//文字列型を整数型に変換
		$intnow = $now->format('Ymd');
		(int)$intnow;
	}
}

$mypro = new person("ひろむ","20020718","m");
echo $mypro->name;
echo $mypro->birthday;
echo $mypro->gender;
echo $mypro->selfIntroduction();
echo $mypro->getAge($mypro -> birthday);

?>

<?php
class Person {
	// 名前
	public $name = '';
	// 生年月日(年/月/日)
	public $birthday = '';
	// 性別(m:男性, f:女性)
	public $gender = '';
	//年齢
	public $age = '';

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
		$today = date('Ymd');
		$this->age = floor(((int)$today - (int)$birthday) / 10000) . '歳';
		return $this->age;
	}
}

//Personを継承して出身地を趣味ののプロパティをコンストラクタで初期化する
class Profile extends Person{
	//出身地のプロパティを定義
	public $hometown = '';
	//趣味のプロパティを定義
	public $hobby ='';

	//各情報を初期化する
	public function __construct($hometown,$hobby){
		$this->hometown = $hometown;
		$this->hobby = $hobby;
	}
	public function selfIntroduction(){
		return '私の名前は'.$this->name.'です。'.$this->age.'才'.$this->gender.'です。'."\n".'出身は'.$this->hometown.'趣味は'.$this->hobby.'です。';
		}
	}

$mypro = new Profile("ひろむ","20020718","m","静岡","旅");
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

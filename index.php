
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["name"]))
     {$nameErr = "Name is required";}
   else
     {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name))
       {
       $nameErr = "Only letters and white space allowed";
       }
     }
    
   if (empty($_POST["email"]))
     {$emailErr = "Email is required";}
   else
     {
     $email = test_input($_POST["email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {
       $emailErr = "Invalid email format";
       }
     }
    
   if (empty($_POST["website"]))
     {$website = "";}
   else
     {
     $website = test_input($_POST["website"]);
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
       {
       $websiteErr = "Invalid URL";
       }
     }

   if (empty($_POST["comment"]))
     {$comment = "";}
   else
     {$comment = test_input($_POST["comment"]);}

   if (empty($_POST["gender"]))
     {$genderErr = "Gender is required";}
   else
     {$gender = test_input($_POST["gender"]);}
}

function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>
<?php
	echo "This is my php test page<br>";
	
	$sss="77777";
	$cars=array("Volvo","BMW","Toyota");
	
	show();
	
	echo "globalsss:$sss",' a ',' good ',' day <br>';
	
	print "My car is a {$cars[0]}<br>";  //{}可不加
	
	$v_a = "usis";
	var_dump($v_a);
	echo '<br>';
	
	$x = 1E3;
	var_dump($x);
	echo '<br>'.$x.'<br>';
	
	echo 3+"54rww"."<br>";
	
	function show(){
		global $sss;
		$sss="uuuiii";
		echo 'sss:'.$sss.'<br>';
	}
?>
<?php
	$cars=array("Volvo","BMW","Toyota");
	var_dump($cars);
	echo '<br>';
?>

<?php 

	$a = new A;
	$a->show();
	echo A::aa.'<br>';
	class A{
		const aa='uuuu8888';
		private $name="eee";
		public function show($value="ddd"){
			echo "{$this->name} this is function show of class a {$value}<br>";
		}
	}
?>

<?php 
	define("xx","yyyyyyyyy",true);
	$xx = "yyyyyyyyy";
	echo xx.'<br>';
	echo $xx.'<br>';
	if($xx==xx)
		echo "aa";
	else echo "bb";
	echo '<br>';
?>

<?php 
	$str1="hello world!";
	$str2="world";
	echo strlen($str1).'<br>';
	echo strpos($str1,$str2).'<br>';
?>

<?php 
	$arr[]='aaa';
	$arr[]='bbb';
	$arr['dd']='ddddd';
	print_r($arr);
	echo '<br>';
	
	$arr2[]=array('a'=>'xxxaaa');
	$arr2[]=array('b'=>'xxxbbb');
	print_r($arr2);
	echo '<br>';
?>

<?php 
	$arr3=array(1,2,3,4,5,6,7,8,9);
	foreach($arr3 as $k=>$v){
		echo $k.':'.$v*$v.' ';
	}
	echo 'This is line'.__LINE__.'<br>';
	echo __FILE__.'<br>';
?>
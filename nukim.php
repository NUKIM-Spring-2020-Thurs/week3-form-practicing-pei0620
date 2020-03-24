<?php  

$sname=$_POST["sname"];
$sex=$_POST["sex"];
$birth=$_POST["birth"];
$id=$_POST["id"];
$mail=$_POST["mail"];
$number=$_POST["number"];
$eat=$_POST["eat"];
$city=$_POST["city"];
$size=$_POST["size"];
$way=$_POST["way"];
$sick=$_POST["sick"];
$comment=$_POST["comment"];

echo "你的姓名:".$sname."</br>";
echo "你的性別:".$sex. "</br>";
echo "你的生日:".$birth. "</br>";
echo "你的身份證字號:".$id. "</br>";
echo "你的郵件信箱:" .$mail."</br>";
echo "您的手機號碼:" .$number."</br>";
echo "飲食習慣:".$eat."</br>";

$citynumber=count($city);
for($i=0;$i<$citynumber;$i++)
{
	echo "居住地址個數:".$city[$i]."</br>";

}
echo "衣服尺寸:".$size."</br>";

//$wayNO=count($way);
//for($j=0;$j<$wayNO;$j++)
//{
//	echo "你的管道:".$way[$j]."</br>";

//}
foreach ($way as $key=> $value)
{
	echo "透過甚麼管道:".$value."</br>";
} 
echo "是否有特殊疾病史：" .$sick."</br>";
echo n12br($comment);

?>
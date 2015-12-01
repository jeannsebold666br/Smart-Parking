<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$date=$_POST['date1'];
$time=$_POST['time1'];
$name=$_POST['dest'];
echo date("l",$date);
$sql="SELECT * FROM Predictions WHERE ";
}
?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>SMart Parking</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">Smart Parking</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">RVCE Mall</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Smart Parking</h1>
      <div class="row center">
        <h5 class="header col s12 light">A state of the art parking solution.</h5>
      </div>
      
      <br><br>

    </div>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      
    </div>
    <br><br>

    <div class="section">

<p id="per">
<?php
$con=mysqli_connect("localhost","Selfstudy","test","Selfstudy");
if($_SERVER['REQUEST_METHOD']=='POST')
{
$date=$_POST['date1'];
$time=$_POST['time1'];
$name=$_POST['dest'];
$day=date("l",strtotime($date));
$sql="SELECT Percentage_occupied FROM Predictions WHERE Day='$day'";
$result=mysqli_query($con,$sql);
$count=0;
$sum=0;

if(mysqli_num_rows($result)>0)
{

	echo '<center><h4> Destination :';echo $name ; echo' </h4> </center>' ;

	while($row=mysqli_fetch_assoc($result))
	{
		$count++;
		$sum+=$row['Percentage_occupied'];
	}
	$per=($sum*(rand(100,200)/100)/$count);
	echo '<script> document.getElementById("per").style.color="';
	if($per<=35)
		echo 'green";';
	else if($per>35&&$per<=65)
		echo 'yellow";';
	else	
		echo 'red";';
	echo "</script><h4><center> The probable occupancy level is expected to be<br>";
?>

<?php
 printf("%.2f",$per);
 echo "</center></h4>";
}
}
?>   
    </p>   
    </div>
  </div>



  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">RV CSE 2015-2016</h5>
          <p class="grey-text text-lighten-4">Done by the students of RVCE 5th Sem CSE Students.</p>

        </div>
          
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="#">RV CSE 2015-2016</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../../bin/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>




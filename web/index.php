  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMart Parking for RVCE</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.html" class="brand-logo">Smart Parking</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="predict.html">Parking Predictor</a></li>
      </ul>
<script type="text/javascript">
  var timeout = setTimeout("location.reload(true);",2000);
  function resetTimeout() {
    clearTimeout(timeout);
    timeout = setTimeout("location.reload(true);",2000);
  }
</script>
      
      
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Smart Parking</h1>
      <div class="row center">
        <h5 class="header col s12 light">A state of the art parking solution.</h5>
      </div>
      <div class="row center">
        <a href="predict.html" id="download-button" class="btn-large waves-effect waves-light orange">Predict your Journey here</a>
      </div>
      <br><br>

    </div>
  </div>


<div class="row center">
        <h5 class="header col s12 light">RVCE Mall</h5>
      </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Slot 1</h5>
<center>
            <p class="light"><img id="slot1" src="Green.jpg" class="img-rounded" style="width:160px; height:240px; padding-left:10px">
</center>
    
</p>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Slot 2</h5>
<center>
            <p class="light"><img id="slot2" src="Green.jpg" class="img-rounded" style="width:160px; height:240px; padding-left:10px"></p>
        </center>  </div>
        </div>
<?php
$con=mysqli_connect("localhost","Selfstudy","test","Selfstudy");
$sql='SELECT * FROM Normal ORDER BY Time DESC';
$result=mysqli_query($con,$sql);
$slot1=0;
$slot2=0;
if(mysqli_num_rows($result)>0)
while($data=mysqli_fetch_assoc($result))
{
if($data['Slot']==1&&$slot1==0)
{
  $slot1=1;
  echo "<script> document.getElementById('slot1').src=";
  if($data['In_Out']==0)
    echo "'Green.jpg'</script>";
  else
    echo "'Red.jpg'</script>";
  }
  else if($data['Slot']==2&&$slot2==0)
{
  $slot2=1;
  echo "<script> document.getElementById('slot2').src=";
  if($data['In_Out']==0)
    echo "'Green.jpg'</script>";
  else
    echo "'Red.jpg'</script>";
  }
  else
    break;
}
?>
        
      </div>

    </div>
    <br><br>

    <div class="section">

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
  <script src="js/materialize.js"></script>
 <!-- <script src="js/init.js"></script> -->

  </body>
</html>

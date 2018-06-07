<?php
include 'conn.php';
session_start();

$id = $_SESSION['id'];

?>
<html lang="he">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <title>VisaIndia</title>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="js/materialize.js"></script>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo right">VisaIndia</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="#">הזמן עכשיו</a></li>
        <li><a href="#">שאלות ותשובות</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav right-align">
        <li><a href="#">תפריט פנימי</a></li>
        <li><a href="#">תפריט פנימי</a></li>
        <li><a href="#">תפריט פנימי</a></li>
        <li><a href="#">תפריט פנימי</a></li>
      </ul>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
<?php
if($stmt = $conn->prepare("SELECT * FROM main  WHERE id='$id'")){
   $stmt->execute();
   $result = $stmt->get_result();
   $row=$result->fetch_object();

  


?>
<div class="row">
        <div class="col s12">
          <div class="row">
            <div class="col s6">

<table>

          
<tr bgcolor='#f1f1f1'><td><b>סוג דרכון</b></td><td><?php echo $row->Passport_Type ?></td></tr>
<tr><td><b>לאום</b></td><td><?php echo $row->Nationality ?></td></tr>
<tr bgcolor='#f1f1f1'><td><b>שם משפחה</b></td><td><?php echo $row->Surename ?></td></tr>
<tr><td><b>שם</b></td><td><?php echo $row->Given_Name ?></td></tr>
          
  
    </table>

    </div>
    </div>
    </div>
    </div>


<?php

}else{
  echo $conn->error;
}
?>
  <footer class="page-footer orange">
    <div class="container">
      <div class="row right-align">
        <div class="col l6 s12">
          <h5 class="white-text">עלינו</h5>
          <p class="grey-text text-lighten-4">אודות השירות</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">ניווט מהיר</h5>
          <ul>
            <li><a class="white-text" href="#!">הגש בקשה לויזה</a></li>
            <li><a class="white-text" href="#!">שאלות ותשובות</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      VisaIndia
      </div>
    </div>
  </footer>
  </body>
</html>


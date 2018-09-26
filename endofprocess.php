<?php

// View choosen values in tables and send it to export.php (xls)
include 'conn.php';
include 'phpArray.php';
session_start();


//count of attar of each optional section
$fieldsLength=count($fields);
$bussinessLength=count($bussiness);
$changedNameLength=count($changedName);
$naturalizationLength=count($naturalization);
$otherPptLength=count($otherPpt);
$MaritalLength=count($Marital);
$GranbparentLength=count($Granbparent);
$PrevOrgLength=count($PrevOrg);
$OldvisaLength=count($Oldvisa);
$RefuseLength=count($Refuse);
$id = $_SESSION['id'];
$Hush = $_SESSION['hush']; // Getting unique number with session from create.php
$_SESSION['hush_product'] = $Hush;
 // Getting unique number with session from create.php
// $_SESSION['idToUpdate'] = $id;
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
if($stmt = $conn->prepare("SELECT * FROM main  WHERE hush='$Hush'")){
   $stmt->execute();
   $result = $stmt->get_result();
   $row=$result->fetch_object(); 
   //Show general details
?>
<div class="row">
        <div class="col s12">
          <div class="row">
            <div class="col s6">
            <h3>תשלום בוצע בהצלחה!</h3>
            <h4>קבלה תשלח לכתובת הדואר האלקטרוני</h4>
            
              <table class="centered" >
                <?php
             
                ?>
          
                 <tr><td><b><?php echo "שם פרטי" ?></b></td><td width="70%"><?php echo $row->Given_Name ?></td></tr>
                 <tr><td><b><?php echo "שם משפחה" ?></b></td><td width="70%"><?php echo $row->Surename ?></td></tr>
                 <tr><td><b><?php echo "דואר אלקטרוני" ?></b></td><td width="70%"><?php echo $row->Email ?></td></tr>
                 <tr><td><b><?php echo "מספר לקוח" ?></b></td><td width="70%"><?php echo $row->hush ?></td></tr>
                  <?php
                   
                  ?>
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


<div class="row">
        <div class="col s12">
            <div class="col s6">
            <a class="waves-effect green accent-3 btn " onClick="document.location.href='form.php'" />חזרה לדף הבית</a>
            </div>
          </div>
        </div>
</div>

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


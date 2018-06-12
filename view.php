<?php
include 'conn.php';
include 'phpArray.php';
session_start();
$fieldsLength=count($fields);
$bussinessLength=count($bussiness);
$changedNameLength=count($changedName);
$naturalizationLength=count($naturalization);
$otherPptLength=count($otherPpt);
$MaritalLength=count($Marital);
$id = $_SESSION['id'];
$_SESSION['idToUpdate'] = $id;
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
            <h3>פרטים שמולאו</h3>
            <h5>נא וודא שהפרטים שמילאת נכונים לפני שליחה, במידה והינך רוצה לתקן אחד אן יותר מהפרטים לחץ על על חזרה לטופס מילוי</h5>
              <table class="centered" >
                <?php
                  for($x=0;$x<$fieldsLength;$x++)
                    {
                    $temp = $fields[$x][1];
                ?>
                 <tr><td><b><?php echo $fields[$x][0] ?></b></td><td width="70%"><?php echo $row->$temp ?></td></tr>
                  <?php
                   }
                  ?>
              </table>
             </div>
          </div>
         </div>
  </div>
<?php
  if($row->Visa_Type =='Bussiness')
  {
?>
    <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="col s6">
            <h4>פרטי העסק</h4>
              <table class="centered" >
                <?php
                  for($i=0;$i<$bussinessLength;$i++)
                    {
                    $bussiness_attr = $bussiness[$i][1];
                ?>
                 <tr><td><b><?php echo $bussiness[$i][0] ?></b></td><td width="70%"><?php echo $row->$bussiness_attr ?></td></tr>
                  <?php
                   }
                  ?>
              </table>
             </div>
          </div>
         </div>
  </div>
  <?php
  }
  if($row->Prev_Surname != null)
  {
?>
    <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="col s6">
            <h4>שם ושם משפחה קודמים</h4>
              <table class="centered" >
                <?php
                  for($i=0;$i<$changedNameLength;$i++)
                    {
                      $changedName_attr = $changedName[$i][1];
                ?>
                 <tr><td><b><?php echo $changedName[$i][0] ?></b></td><td width="70%"><?php echo $row->$changedName_attr ?></td></tr>
                  <?php
                   }
                  ?>
              </table>
             </div>
          </div>
         </div>
  </div>
  <?php
  }
  if($row->Nationality_By_Birth == "NATURALIZATION")
  {
?>
    <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="col s6">
            <h4>אזרחות קודמת</h4>
              <table class="centered" >
                <?php
                  for($i=0;$i<$naturalizationLength;$i++)
                    {
                      $naturalization_attr = $naturalization[$i][1];
                ?>
                 <tr><td><b><?php echo $naturalization[$i][0] ?></b></td><td width="70%"><?php echo $row->$naturalization_attr ?></td></tr>
                  <?php
                   }
                  ?>
              </table>
             </div>
          </div>
         </div>
  </div>
  <?php
  }
  if($row->Other_Passport == "Yes")
  {
?>
    <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="col s6">
            <h4>דרכון נוסף</h4>
              <table class="centered" >
                <?php
                  for($i=0;$i<$otherPptLength;$i++)
                    {
                      $otherPpt_attr = $otherPpt[$i][1];
                ?>
                 <tr><td><b><?php echo $otherPpt[$i][0] ?></b></td><td width="70%"><?php echo $row->$otherPpt_attr ?></td></tr>
                  <?php
                   }
                  ?>
              </table>
             </div>
          </div>
         </div>
  </div>
  <?php
  }
  if($row->Marital_Status == "married")
  {
?>
    <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="col s6">
            <h4>פרטי בן/בת זוג</h4>
              <table class="centered" >
                <?php
                  for($i=0;$i<$MaritalLength;$i++)
                    {
                      $Marital_attr = $Marital[$i][1];
                ?>
                 <tr><td><b><?php echo $Marital[$i][0] ?></b></td><td width="70%"><?php echo $row->$Marital_attr ?></td></tr>
                  <?php
                   }
                  ?>
              </table>
             </div>
          </div>
         </div>
  </div>
  <?php
  }
}else{
  echo $conn->error;
}
?>

<div class="row">
        <div class="col s12">
            <div class="col s6">
            <a class="waves-effect red lighten-1 btn" onClick="document.location.href='edit.php'" /> חזרה לתופס רישום</a>
            <a class="waves-effect green accent-3 btn ">אישור</a>
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


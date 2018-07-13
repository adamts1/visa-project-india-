<?php
include 'conn.php';
session_start();
   $id = $_SESSION['id'];
   $_SESSION['idToUpdate'] = $id;
   $PassportType = isset($_POST['passport_type']) ? $_POST['passport_type'] : '';
   $Nationality = isset($_POST['nationality']) ? $_POST['nationality'] : '';
   $PortOfArrival = isset($_POST['port_of_arrival']) ? $_POST['port_of_arrival'] : '';
   $VisaType = isset($_POST['visa_type']) ? $_POST['visa_type'] : '';
   $PurposeOfVisit = isset($_POST['Purpose_Of_Visit']) ? $_POST['Purpose_Of_Visit'] : '';
   //Passport pic
//    $PassportImage = $_FILES['Passport_Image']['tmp_name'];
//    $PassportImage = file_get_contents($PassportImage);
//    $PassportImage = base64_encode($PassportImage);
//    $PassportImage1 = $_FILES['Passport_Image'][name];
//    $_SESSION['passportimage'] = $PassportImage1;
   //Selfi pic
//    $SelfiImage = $_FILES['selfi_image']['tmp_name'];
//    $SelfiImage = file_get_contents($SelfiImage);
//    $SelfiImage = base64_encode($SelfiImage);
//    $SelfiImage1 = $_FILES['selfi_image'][name];
//    $_SESSION['selfiimage'] = $SelfiImage1;
//    $_SESSION['SelfiImageFile'] = $SelfiImage;
   //
   $Email = isset($_POST['email1']) ? $_POST['email1'] : '';
   $ValidateEmail = isset($_POST['email2']) ? $_POST['email2'] : '';
   $DateOfBirth = isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : '';
   $ExpectedArrivalDate = isset($_POST['expected_arrival_date']) ? $_POST['expected_arrival_date'] : '';
   $Surname = isset($_POST['surname']) ? $_POST['surname'] : '';
   $GivenName = isset($_POST['given_name']) ? $_POST['given_name'] : '';
   $PrevSurame = isset($_POST['Prev_Surname']) ? $_POST['Prev_Surname'] : '';
   $PrevGivenName = isset($_POST['Prev_Given_Name']) ? $_POST['Prev_Given_Name'] : '';
   $Gender = isset($_POST['Gender']) ? $_POST['Gender'] : '';
   $BirthPlace = isset($_POST['Birth_Place']) ? $_POST['Birth_Place'] : '';
   $CountryBirth = isset($_POST['Country_Birth']) ? $_POST['Country_Birth'] : '';
   $NationalIdNumber = isset($_POST['National_Id_Number']) ? $_POST['National_Id_Number'] : '';
   $Religion = isset($_POST['Religion']) ? $_POST['Religion'] : '';
   $IdentityMarks = isset($_POST['Identity_Marks']) ? $_POST['Identity_Marks'] : '';
   $Education = isset($_POST['Education']) ? $_POST['Education'] : '';
   $NationalityByBirth = isset($_POST['Nationality_By_Birth']) ? $_POST['Nationality_By_Birth'] : '';
   $PrevNationality = isset($_POST['Prev_Nationality']) ? $_POST['Prev_Nationality'] : '';
   $AtLeastTwoYears = isset($_POST['At_Least_Two_Years']) ? $_POST['At_Least_Two_Years'] : '';
   $PassportNumber = isset($_POST['Passport_Number']) ? $_POST['Passport_Number'] : '';
   $PassportIssuePlace = isset($_POST['Passport_Issue_Place']) ? $_POST['Passport_Issue_Place'] : '';
   $PassportIssueDate = isset($_POST['Passport_Issue_Date']) ? $_POST['Passport_Issue_Date'] : '';
   $PassportExpiryDate = isset($_POST['Passport_Expiry_Date']) ? $_POST['Passport_Expiry_Date'] : '';
   $OtherPassport = isset($_POST['Other_Passport']) ? $_POST['Other_Passport'] : '';
   $OtherPptCountryIssue = isset($_POST['Other_Ppt_Country_Issue']) ? $_POST['Other_Ppt_Country_Issue'] : '';
   $OtherPptNo = isset($_POST['Other_Ppt_No']) ? $_POST['Other_Ppt_No'] : '';
   $OtherPpptIssueDate = isset($_POST['Other_Ppt_Issue_Date']) ? $_POST['Other_Ppt_Issue_Date'] : '';
   $OtherPptIssuePlace = isset($_POST['Other_Ppt_Issue_Place']) ? $_POST['Other_Ppt_Issue_Place'] : '';
   $OtherPptNationality = isset($_POST['Other_Ppt_Nationality']) ? $_POST['Other_Ppt_Nationality'] : '';
   $Address1 = isset($_POST['Address1']) ? $_POST['Address1'] : '';
   $CityTownVillage = isset($_POST['City_Town_Village']) ? $_POST['City_Town_Village'] : '';
   $PresCountry = isset($_POST['Pres_Country']) ? $_POST['Pres_Country'] : '';
   $StateName = isset($_POST['State_Name']) ? $_POST['State_Name'] : '';
   $Pincode = isset($_POST['Pincode']) ? $_POST['Pincode'] : '';
   $PresPhone = isset($_POST['Pres_Phone']) ? $_POST['Pres_Phone'] : '';
   $Fthrname = isset($_POST['Fthrname']) ? $_POST['Fthrname'] : '';
   $FatherNationality = isset($_POST['Father_Nationality']) ? $_POST['Father_Nationality'] : '';
   $FatherPreviousNationality = isset($_POST['Father_Previous_Nationality']) ? $_POST['Father_Previous_Nationality'] : '';
   $FatherPlaceOfBirth = isset($_POST['Father_Place_Of_Birth']) ? $_POST['Father_Place_Of_Birth'] : '';
   $FatherCountryOfBirth = isset($_POST['Father_Country_Of_Birth']) ? $_POST['Father_Country_Of_Birth'] : '';
   $MotherName = isset($_POST['Mother_Name']) ? $_POST['Mother_Name'] : '';
   $MotherNationality = isset($_POST['Mother_Nationality']) ? $_POST['Mother_Nationality'] : '';
   $MotherPreviousNationality = isset($_POST['Mother_Previous_Nationality']) ? $_POST['Mother_Previous_Nationality'] : '';
   $MotherPlaceOfBirth = isset($_POST['Mother_Place_Of_Birth']) ? $_POST['Mother_Place_Of_Birth'] : '';
   $MotherCountryOfBirth = isset($_POST['Mother_Country_Of_Birth']) ? $_POST['Mother_Country_Of_Birth'] : '';
   $MaritalStatus = isset($_POST['Marital_Status']) ? $_POST['Marital_Status'] : '';
   $SpouseName = isset($_POST['Spouse_Name']) ? $_POST['Spouse_Name'] : '';
   $SpouseNationality = isset($_POST['Spouse_Nationality']) ? $_POST['Spouse_Nationality'] : '';
   $SpousePreviousNationality = isset($_POST['Spouse_Previous_Nationality']) ? $_POST['Spouse_Previous_Nationality'] : '';
   $SpousePlaceOfBirth = isset($_POST['Spouse_Place_Of_Birth']) ? $_POST['Spouse_Place_Of_Birth'] : '';
   $SpouseCountryOfBirth = isset($_POST['Spouse_Country_Of_Birth']) ? $_POST['Spouse_Country_Of_Birth'] : '';
   $GrandparentFlag = isset($_POST['Grandparent_Flag']) ? $_POST['Grandparent_Flag'] : '';
   $GrandparentDetails = isset($_POST['Grandparent_Details']) ? $_POST['Grandparent_Details'] : '';
   $Occupation = isset($_POST['Occupation']) ? $_POST['Occupation'] : '';
   $Empname = isset($_POST['Empname']) ? $_POST['Empname'] : '';
   $Empdesignation = isset($_POST['Empdesignation']) ? $_POST['Empdesignation'] : '';
   $Empaddress = isset($_POST['Empaddress']) ? $_POST['Empaddress'] : '';
   $Empphone = isset($_POST['Empphone']) ? $_POST['Empphone'] : '';
   $PreviousOccupation = isset($_POST['Previous_Occupation']) ? $_POST['Previous_Occupation'] : '';
   $PrevOrg = isset($_POST['Prev_Org']) ? $_POST['Prev_Org'] : '';
   $PreviousOrganization = isset($_POST['Previous_Organization']) ? $_POST['Previous_Organization'] : '';
   $PreviousDesignation = isset($_POST['Previous_Designation']) ? $_POST['Previous_Designation'] : '';
   $PreviousRank = isset($_POST['Previous_Rank']) ? $_POST['Previous_Rank'] : '';
   $PreviousPosting = isset($_POST['Previous_Posting']) ? $_POST['Previous_Posting'] : '';

   $VisaSerreqId1 = isset($_POST['Visa_Serreq_Id_1']) ? $_POST['Visa_Serreq_Id_1'] : '';
   $Exitpoint = isset($_POST['Exitpoint']) ? $_POST['Exitpoint'] : '';
   $OldVisaFlag = isset($_POST['Old_Visa_Flag']) ? $_POST['Old_Visa_Flag'] : '';
   $PrvVisitAdd1 = isset($_POST['Prv_Visit_Add1']) ? $_POST['Prv_Visit_Add1'] : '';
   $VisitedCity = isset($_POST['Visited_City']) ? $_POST['Visited_City'] : '';
   $OldVisaNo = isset($_POST['Old_Visa_No']) ? $_POST['Old_Visa_No'] : '';
   $OldVisaTypeId = isset($_POST['Old_Visa_Type_Id']) ? $_POST['Old_Visa_Type_Id'] : '';
   $Oldvisaissueplace = isset($_POST['Oldvisaissueplace']) ? $_POST['Oldvisaissueplace'] : '';
   $Oldvisaissuedate = isset($_POST['Oldvisaissuedate']) ? $_POST['Oldvisaissuedate'] : '';
   $RefuseFlag = isset($_POST['Refuse_Flag']) ? $_POST['Refuse_Flag'] : '';
   $RefuseDetails = isset($_POST['Refuse_Details']) ? $_POST['Refuse_Details'] : '';
   $CountryVisited = isset($_POST['Country_Visited']) ? $_POST['Country_Visited'] : '';
   $SaarcFlag = isset($_POST['Saarc_Flag']) ? $_POST['Saarc_Flag'] : '';
//    $SaarcCountry1 = isset($_POST['SaarcCountry']) ? $_POST['SaarcCountry'] : '';
//    $SaarcYear1 = isset($_POST['SaarcYear1']) ? $_POST['SaarcYear1'] : '';
//    $SaarcVisitNo = isset($_POST['SaarcVisitNo']) ? $_POST['SaarcVisitNo'] : '';
   $NameofsponsorInd = isset($_POST['Nameofsponsor_Ind']) ? $_POST['Nameofsponsor_Ind'] : '';
   $Add1ofsponsorInd = isset($_POST['Add1ofsponsor_Ind']) ? $_POST['Add1ofsponsor_Ind'] : '';
   $PhoneofsponsorInd = isset($_POST['Phoneofsponsor_Ind']) ? $_POST['Phoneofsponsor_Ind'] : '';
   $NameofsponsorMsn = isset($_POST['Nameofsponsor_Msn']) ? $_POST['Nameofsponsor_Msn'] : '';
   $Add1ofsponsorMsn = isset($_POST['Add1ofsponsor_Msn']) ? $_POST['Add1ofsponsor_Msn'] : '';
   $PhoneofsponsorMsn = isset($_POST['Phoneofsponsor_Msn']) ? $_POST['Phoneofsponsor_Msn'] : '';
//    //////////////Business
   $BusinessPrep = isset($_POST['Business_Prep']) ? $_POST['Business_Prep'] : '';
   $CompanyName = isset($_POST['Company_Name']) ? $_POST['Company_Name'] : '';
   $CompanyAddress = isset($_POST['Company_Address']) ? $_POST['Company_Address'] : '';
   $CompanyPhone = isset($_POST['Company_Phone']) ? $_POST['Company_Phone'] : '';
   $CompanyWebsite = isset($_POST['Company_Website']) ? $_POST['Company_Website'] : '';
   $NatureOfCompany = isset($_POST['Nature_Of_Company']) ? $_POST['Nature_Of_Company'] : '';
   //Business fields pic
   if (isset($_POST['Business_Card_txt'])) {
   $BusinessCard = $_FILES['Business_Card']['tmp_name'];
   $BusinessCard = file_get_contents($BusinessCard);
   $BusinessCard = base64_encode($BusinessCard);
   $BusinessCard1 = $_FILES['Business_Card'][name];
   $_SESSION['businesscarde'] = $BusinessCard1;
  }else{
    $BusinessCard = '';
  }
//    $sql = "UPDATE main (Passport_Type)
//    SET (Passport_Type ='$PassportType')
//    WHERE (id =$id)";
$sql = "UPDATE main SET Passport_Type='$PassportType', Nationality='$Nationality', Port_Of_Arrival='$PortOfArrival', visa_type='$VisaType',
  Purpose_Of_Visit='$PurposeOfVisit',Business_Prep='$BusinessPrep', Company_Name='$CompanyName', Company_Address='$CompanyAddress',
  Company_Phone='$CompanyPhone', Company_Website='$CompanyWebsite', Nature_Of_Company='$NatureOfCompany',
  Email='$Email', Validate_Email='$ValidateEmail', Date_Of_Birth='$DateOfBirth', Expected_Arrival_Date='$ExpectedArrivalDate', Surename='$Surname', Given_Name='$GivenName', Prev_Surname='$PrevSurame', Prev_Given_Name='$PrevGivenName',
  Gender='$Gender',Birth_Place='$BirthPlace', Country_Birth='$CountryBirth', National_Id_Number='$NationalIdNumber', Religion='$Religion', Identity_Marks='$IdentityMarks', Education='$Education',Nationality_By_Birth='$NationalityByBirth',
  Prev_Nationality='$PrevNationality', At_Least_Two_Years='$AtLeastTwoYears', Passport_Number='$PassportNumber', Passport_Issue_Place='$PassportIssuePlace', Passport_Issue_Date='$PassportIssueDate', Passport_Expiry_Date='$PassportExpiryDate',
  Other_Passport='$OtherPassport',Other_Ppt_Country_Issue='$OtherPptCountryIssue', Other_Ppt_No='$OtherPptNo', Other_Ppt_Issue_Date='$OtherPpptIssueDate', Other_Ppt_Nationality='$OtherPptNationality',
  Address1='$Address1', City_Town_Vllage='$CityTownVillage', Pres_Country='$PresCountry', State_Name='$StateName', Pincode='$Pincode', Pres_Phone='$PresPhone',
  Fthrname='$Fthrname',	Father_Nationality='$FatherNationality', Father_Previous_Nationality='$FatherPreviousNationality', Father_Place_Of_Birth='$FatherPlaceOfBirth', Father_Country_Of_Birth='$FatherCountryOfBirth',
  Mother_Name='$MotherName', Mother_Nationality='$MotherNationality', Mother_Previous_Nationality='$MotherPreviousNationality', Mother_Place_Of_Birth='$MotherPlaceOfBirth',
  Marital_Status='$MaritalStatus', Spouse_Name='$SpouseName', Spouse_Nationality='$SpouseNationality', Spouse_Previous_Nationality='$SpousePreviousNationality', Spouse_Place_Of_Birth='$Spouse_Previous_Nationality',Spouse_Place_Of_Birth='$SpousePlaceOfBirth', Spouse_Country_Of_Birth='$SpouseCountryOfBirth',
  Grandparent_Flag='$GrandparentFlag', Grandparent_Details='$GrandparentDetails', 	Occupation='$Occupation', Empname='$Empname', Empdesignation='$Empdesignation', Empaddress='$Empaddress', Empphone='$Empphone', Previous_Occupation='$PreviousOccupation',
  Prev_Org='$PrevOrg', Previous_Organization='$PreviousOrganization', Previous_Designation='$PreviousDesignation', Previous_Rank='$PreviousRank', Previous_Posting='$PreviousPosting',
  visa_serreq_id_1='$VisaSerreqId1', Exitpoint='$Exitpoint', Old_Visa_Flag='$OldVisaFlag', Prv_Visit_Add1='$PrvVisitAdd1', Visited_City='$VisitedCity', Old_Visa_No='$OldVisaNo ', Old_Visa_Type_Id='$OldVisaTypeId', Oldvisaissueplace='$Oldvisaissueplace', Oldvisaissuedate='$Oldvisaissuedate',
  Refuse_Flag='$RefuseFlag', 	Refuse_Details='$RefuseDetails', Country_Visited='$CountryVisited', Saarc_Flag='$SaarcFlag',
  Nameofsponsor_Ind='$NameofsponsorInd', Add1ofsponsor_Ind='$Add1ofsponsorInd', Phoneofsponsor_Ind='$PhoneofsponsorInd' ,Nameofsponsor_Msn='$NameofsponsorMsn', Add1ofsponsor_Msn='$Add1ofsponsorMsn', Phoneofsponsor_Msn='$PhoneofsponsorMsn',
  Other_Ppt_Issue_Place='$OtherPptIssuePlace' WHERE id=$id";


    
    if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
    }else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }

     if (isset($_POST['SaarcCountry'])) {

        for ($i = 0; $i < count($_POST['SaarcVisitNo']); $i++) {
            $SaarcVisitNo1 = $_POST['SaarcVisitNo'][$i];
            $SaarcYear11 = $_POST['SaarcYear1'][$i];
            $SaarcCountry1 = $_POST['SaarcCountry'][$i];
            
        $query1 = "UPDATE test2 SET Country='$SaarcCountry1', YearOfVisits='$SaarcYear11', NumOfVisits='$SaarcVisitNo1', mainId='$id'";
        if ($conn->query($query1) === TRUE) {
            echo "New record created successfully";
           }else {
            echo "Error: " . $query1 . "<br>" . $conn->error;
            }
       
        }
        }

//      $sql = "SELECT * FROM main";
// $sth = $conn->query($sql);

// while($result=mysqli_fetch_array($sth)){  
// echo '<img width="600" height="600"  src="data:image;base64,'.$result['Business_Card'].'"/>';
// // echo '<img width="600" height="600"  src="data:image;base64,'.$result['Selfi_Image'].'"/>';
// }
// $conn->close();

header('Location: view.php');


    ?>
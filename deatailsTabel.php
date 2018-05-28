   
   
<?php

include 'conn.php';

   $PassportType = isset($_POST['passport_type']) ? $_POST['passport_type'] : '';
   $Nationality = isset($_POST['nationality']) ? $_POST['nationality'] : '';
   $PortOfArrival = isset($_POST['port_of_arrival']) ? $_POST['port_of_arrival'] : '';
   $VisaType = isset($_POST['visa_type']) ? $_POST['visa_type'] : '';
   $PurposeOfVisit = isset($_POST['purpose of visit']) ? $_POST['purpose of visit'] : '';
   //Passport pic
   $PassportImage = $_FILES['passport_image']['tmp_name'];
   $PassportImage = file_get_contents($PassportImage);
   $PassportImage = base64_encode($PassportImage);
   //Selfi pic
   $SelfiImage = $_FILES['selfi_image']['tmp_name'];
   $SelfiImage = file_get_contents($SelfiImage);
   $SelfiImage = base64_encode($SelfiImage);
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
   $Religion = isset($_POST['religion']) ? $_POST['religion'] : '';
   $IdentityMarks = isset($_POST['Identity_Marks']) ? $_POST['Identity_Marks'] : '';
   $Education = isset($_POST['Education']) ? $_POST['Education'] : '';
   $NationalityByBirth = isset($_POST['Nationality_By_Birth']) ? $_POST['Nationality_By_Birth'] : '';
   $PrevNationality = isset($_POST['prev_nationality']) ? $_POST['prev_nationality'] : '';
   $PassportNumber = isset($_POST['passport_number']) ? $_POST['prev_nationality'] : '';
   $PassportIssuePlace = isset($_POST['passport_issue_place']) ? $_POST['passport_issue_place'] : '';
   $PassportIssueDate = isset($_POST['passport_issue_date']) ? $_POST['passport_issue_date'] : '';
   $PassportExpiryDate = isset($_POST['passport_expiry_date']) ? $_POST['passport_expiry_date'] : '';
   $OtherPptCountryIssue = isset($_POST['other_ppt_country_issue']) ? $_POST['other_ppt_country_issue'] : '';
   $OtherPptNo = isset($_POST['other_ppt_no']) ? $_POST['other_ppt_no'] : '';
   $OtherPpptIssueDate = isset($_POST['other_ppt_issue_date']) ? $_POST['other_ppt_issue_date'] : '';
   $OtherPptIssuePlace = isset($_POST['other_ppt_issue_place']) ? $_POST['other_ppt_issue_place'] : '';
   $Address = isset($_POST['address']) ? $_POST['address'] : '';
   $CityTownVillage = isset($_POST['city_town_village']) ? $_POST['city_town_village'] : '';
   $PresCountry = isset($_POST['pres_country']) ? $_POST['pres_country'] : '';
   $StateName = isset($_POST['state_name']) ? $_POST['state_name'] : '';
   $Pincode = isset($_POST['pincode']) ? $_POST['pincode'] : '';
   $PresPhone = isset($_POST['pres_phone']) ? $_POST['pres_phone'] : '';
   $Fthrname = isset($_POST['fthrname']) ? $_POST['fthrname'] : '';
   $FatherNationality = isset($_POST['father_nationality']) ? $_POST['father_nationality'] : '';
   $FatherPreviousNationality = isset($_POST['father_previous_nationality']) ? $_POST['father_previous_nationality'] : '';
   $FatherPlaceOfBirth = isset($_POST['father_place_of_birth']) ? $_POST['father_place_of_birth'] : '';
   $FatherCountryOfBirth = isset($_POST['father_country_of_birth']) ? $_POST['father_country_of_birth'] : '';
   $MotherName = isset($_POST['mother_name']) ? $_POST['mother_name'] : '';
   $MotherNationality = isset($_POST['mother_nationality']) ? $_POST['mother_nationality'] : '';
   $MotherPreviousNationality = isset($_POST['mother_previous_nationality']) ? $_POST['mother_previous_nationality'] : '';
   $MotherPlaceOfBirth = isset($_POST['mother_place_of_birth']) ? $_POST['mother_place_of_birth'] : '';
   $MotherCountryOfBirth = isset($_POST['mother_country_of_birth']) ? $_POST['mother_country_of_birth'] : '';
   $MaritalStatus = isset($_POST['marital_status']) ? $_POST['marital_status'] : '';
   $SpouseName = isset($_POST['spouse_name']) ? $_POST['spouse_name'] : '';
   $SpouseNationality = isset($_POST['spouse_nationality']) ? $_POST['spouse_nationality'] : '';
   $SpousePreviousNationality = isset($_POST['spouse_previous_nationality']) ? $_POST['spouse_previous_nationality'] : '';
   $SpouseCountryOfBirth = isset($_POST['spouse_country_of_birth']) ? $_POST['spouse_country_of_birth'] : '';
   $GrandparentDetails = isset($_POST['grandparent_details']) ? $_POST['grandparent_details'] : '';
   $Occupation = isset($_POST['occupation']) ? $_POST['occupation'] : '';
   $Empname = isset($_POST['empname']) ? $_POST['empname'] : '';
   $Empdesignation = isset($_POST['empdesignation']) ? $_POST['empdesignation'] : '';
   $Empaddress = isset($_POST['empaddress']) ? $_POST['empaddress'] : '';
   $Empphone = isset($_POST['empphone']) ? $_POST['empphone'] : '';
   $PreviousOccupation = isset($_POST['previous_occupation']) ? $_POST['previous_occupation'] : '';
   $PreviousOrganization = isset($_POST['previous_organization']) ? $_POST['previous_organization'] : '';
   $PreviousDesignation = isset($_POST['previous_designation']) ? $_POST['previous_designation'] : '';
   $PreviousRank = isset($_POST['previous_rank']) ? $_POST['previous_rank'] : '';
   $PreviousPosting = isset($_POST['previous_posting']) ? $_POST['previous_posting'] : '';
   $VisaSerreqId1 = isset($_POST['visa_serreq_id_1']) ? $_POST['visa_serreq_id_1'] : '';
   $Exitpoint = isset($_POST['exitpoint']) ? $_POST['exitpoint'] : '';
   $prvVisitAdd1 = isset($_POST['prv_visit_add1']) ? $_POST['prv_visit_add1'] : '';
   $VisitedCity = isset($_POST['visited_city']) ? $_POST['visited_city'] : '';
   $OldVisaNo = isset($_POST['old_visa_no']) ? $_POST['old_visa_no'] : '';
   $OldVisaTypeId = isset($_POST['old_visa_type_id']) ? $_POST['old_visa_type_id'] : '';
   $Oldvisaissueplace = isset($_POST['oldvisaissueplace']) ? $_POST['oldvisaissueplace'] : '';
   $RefuseDetails = isset($_POST['refuse_details']) ? $_POST['refuse_details'] : '';
   $CountryVisited = isset($_POST['country_visited']) ? $_POST['country_visited'] : '';
   $SaarcCountry1 = isset($_POST['saarcCountry1']) ? $_POST['saarcCountry1'] : '';
   $SaarcYear1 = isset($_POST['saarcYear1']) ? $_POST['saarcYear1'] : '';
   $SaarcVisitNo = isset($_POST['saarcVisitNo']) ? $_POST['saarcVisitNo'] : '';
   $NameofsponsorInd = isset($_POST['nameofsponsor_ind']) ? $_POST['nameofsponsor_ind'] : '';
   $Add1ofsponsorInd = isset($_POST['add1ofsponsor_ind']) ? $_POST['add1ofsponsor_ind'] : '';
   $PhoneofsponsorInd = isset($_POST['phoneofsponsor_ind']) ? $_POST['phoneofsponsor_ind'] : '';
   $NameofsponsorMsn = isset($_POST['nameofsponsor_msn']) ? $_POST['nameofsponsor_msn'] : '';
   $Add1ofsponsorMsn = isset($_POST['add1ofsponsor_msn']) ? $_POST['add1ofsponsor_msn'] : '';
   $PhoneofsponsorMsn = isset($_POST['phoneofsponsor_msn']) ? $_POST['phoneofsponsor_msn'] : '';
   //Business fields pic
//    $BusinessCard = $_FILES['business_card']['tmp_name'];
//    $BusinessCard = file_get_contents($business_card);
//    $BusinessCard = base64_encode($business_card);
   //Business fields
   $Business_prep = isset($_POST['business_prep']) ? $_POST['business_prep'] : '';
   $Company_name = isset($_POST['company_name']) ? $_POST['company_name'] : '';
   $Company_address = isset($_POST['company_address']) ? $_POST['company_address'] : '';
   $Company_phone = isset($_POST['company_phone']) ? $_POST['company_phone'] : '';
   $Company_website = isset($_POST['company_website']) ? $_POST['company_website'] : '';
   $Nature_of_company = isset($_POST['nature_of_company']) ? $_POST['nature_of_company'] : '';




   $sql = "INSERT INTO main (Passport_Type, Nationality	, Port_Of_Arrival, Visa_Type, Purpose_Of_Visit,Passport_Image, Selfi_Image, Email, Validate_Email, Date_Of_Birth, Expected_Arrival_Date, Surename, Given_Name, Prev_Surname, Prev_Given_Name, Gender, Birth_Place, Country_Birth, National_Id_Number, Religion,	Identity_Marks, Education, Nationality_By_Birth)
   VALUES ('$PassportType','$Nationality', '$PortOfArrival', '$VisaType', '$PurposeOfVisit','$PassportImage','$SelfiImage','$Email','$ValidateEmail','$DateOfBirth','$ExpectedArrivalDate','$Surname','$GivenName','$PrevSurame','$PrevGivenName','$Gender','$BirthPlace','$CountryBirth','$NationalIdNumber','$Religion','$IdentityMarks','$Education', '$NationalityByBirth')";
    if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
    }else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }


//      $sql = "SELECT * FROM main";
// $sth = $conn->query($sql);

// while($result=mysqli_fetch_array($sth)){  
// echo '<img width="600" height="600"  src="data:image;base64,'.$result['Passport_Image'].'"/>';
// // echo '<img width="600" height="600"  src="data:image;base64,'.$result['Selfi_Image'].'"/>';
// }
// $conn->close();

    ?>
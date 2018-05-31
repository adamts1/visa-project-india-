   
   
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




   $sql = "INSERT INTO main (Passport_Type, Nationality	, Port_Of_Arrival, Visa_Type, Purpose_Of_Visit,Passport_Image, Selfi_Image, Email, Validate_Email, Date_Of_Birth, Expected_Arrival_Date, Surename, Given_Name, Prev_Surname, Prev_Given_Name, Gender, Birth_Place, Country_Birth, National_Id_Number, Religion,	Identity_Marks, Education, Nationality_By_Birth, At_Least_Two_Years, Passport_Number, Passport_Issue_Place, Passport_Issue_Date, Passport_Expiry_Date, Other_Passport, Other_Ppt_Country_Issue, Other_Ppt_No, Other_Ppt_Issue_Date, Other_Ppt_Issue_Place, Other_Ppt_Nationality, Address1, City_Town_Vllage, Pres_Country, State_Name, Pincode, Pres_Phone, Fthrname, Father_Nationality, Father_Previous_Nationality, Father_Country_Of_Birth, Mother_Name, Mother_Nationality, Mother_Previous_Nationality, Mother_Place_Of_Birth, Mother_Country_Of_Birth, Marital_Status, Spouse_Name, Spouse_Nationality, Spouse_Previous_Nationality, Spouse_Place_Of_Birth, Spouse_Country_Of_Birth, Grandparent_Flag, Grandparent_Details, Occupation, Empname, Empdesignation, Empaddress, Empphone, Previous_Occupation, Prev_Org, Previous_Organization, Previous_Designation, Previous_Rank, Previous_Posting)
   VALUES ('$PassportType','$Nationality', '$PortOfArrival', '$VisaType', '$PurposeOfVisit','$PassportImage','$SelfiImage','$Email','$ValidateEmail','$DateOfBirth','$ExpectedArrivalDate','$Surname','$GivenName','$PrevSurame','$PrevGivenName','$Gender','$BirthPlace','$CountryBirth','$NationalIdNumber','$Religion','$IdentityMarks','$Education', '$NationalityByBirth','$AtLeastTwoYears', '$PassportNumber', '$PassportIssuePlace', '$PassportIssueDate', '$PassportExpiryDate', '$OtherPassport', '$OtherPptCountryIssue', '$OtherPptNo', '$OtherPpptIssueDate', '$OtherPptIssuePlace', '$OtherPptNationality', '$Address1', '$CityTownVillage', '$PresCountry', '$StateName', '$Pincode', '$PresPhone', '$Fthrname', '$FatherNationality','$FatherPreviousNationality', '$FatherCountryOfBirth', '$MotherName', '$MotherNationality', '$MotherPreviousNationality', '$MotherPlaceOfBirth', '$MotherCountryOfBirth', '$MaritalStatus', '$SpouseName', '$SpouseNationality', '$SpousePreviousNationality', '$SpousePlaceOfBirth', '$SpouseCountryOfBirth', '$GrandparentFlag', '$GrandparentDetails', '$Occupation', '$Empname', '$Empdesignation', '$Empaddress', '$Empphone', '$PreviousOccupation', '$PrevOrg' , '$PreviousOrganization', '$PreviousDesignation', '$PreviousRank', '$PreviousPosting')";
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
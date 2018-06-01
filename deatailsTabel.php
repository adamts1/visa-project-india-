   
   
<?php

include 'conn.php';

   $PassportType = isset($_POST['passport_type']) ? $_POST['passport_type'] : '';
   $Nationality = isset($_POST['nationality']) ? $_POST['nationality'] : '';
   $PortOfArrival = isset($_POST['port_of_arrival']) ? $_POST['port_of_arrival'] : '';
   $VisaType = isset($_POST['visa_type']) ? $_POST['visa_type'] : '';
   $PurposeOfVisit = isset($_POST['purpose of visit']) ? $_POST['purpose of visit'] : '';
   //Passport pic
   $PassportImage = $_FILES['Passport_Image']['tmp_name'];
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
   $SaarcFlag = isset($_POST['Saarc_Flag']) ? $_POST['Saarc_Flag'] : '';
   $CountryVisited = isset($_POST['Country_Visited']) ? $_POST['Country_Visited'] : '';
   $SaarcFlag = isset($_POST['Saarc_Flag']) ? $_POST['Saarc_Flag'] : '';
   $SaarcCountry1 = isset($_POST['SaarcCountry']) ? $_POST['SaarcCountry'] : '';
   $SaarcYear1 = isset($_POST['SaarcYear1']) ? $_POST['SaarcYear1'] : '';
   $SaarcVisitNo = isset($_POST['SaarcVisitNo']) ? $_POST['SaarcVisitNo'] : '';
   $NameofsponsorInd = isset($_POST['Nameofsponsor_Ind']) ? $_POST['Nameofsponsor_Ind'] : '';
   $Add1ofsponsorInd = isset($_POST['Add1ofsponsor_Ind']) ? $_POST['Add1ofsponsor_Ind'] : '';
   $PhoneofsponsorInd = isset($_POST['Phoneofsponsor_Ind']) ? $_POST['Phoneofsponsor_Ind'] : '';
   $NameofsponsorMsn = isset($_POST['Nameofsponsor_Msn']) ? $_POST['Nameofsponsor_Msn'] : '';
   $Add1ofsponsorMsn = isset($_POST['Add1ofsponsor_Msn']) ? $_POST['Add1ofsponsor_Msn'] : '';
   $PhoneofsponsorMsn = isset($_POST['Phoneofsponsor_Msn']) ? $_POST['Phoneofsponsor_Msn'] : '';
   //////////////Business
   $BusinessPrep = isset($_POST['Business_Prep']) ? $_POST['Business_Prep'] : '';
   $CompanyName = isset($_POST['Company_Name']) ? $_POST['Company_Name'] : '';
   $CompanyAddress = isset($_POST['Company_Address']) ? $_POST['Company_Address'] : '';
   $CompanyPhone = isset($_POST['Company_Phone']) ? $_POST['Company_Phone'] : '';
   $CompanyWebsite = isset($_POST['Company_Website']) ? $_POST['Company_Website'] : '';
   $NatureOfCompany = isset($_POST['Nature_Of_Company']) ? $_POST['Nature_Of_Company'] : '';
   //Business fields pic
   $BusinessCard = $_FILES['Business_Card']['tmp_name'];
   $BusinessCard = file_get_contents($BusinessCard);
   $BusinessCard = base64_encode($BusinessCard);




   $sql = "INSERT INTO main (Passport_Type, Nationality	, Port_Of_Arrival, Visa_Type, Purpose_Of_Visit,Passport_Image, Selfi_Image, Email, Validate_Email, Date_Of_Birth, Expected_Arrival_Date, Surename, Given_Name, Prev_Surname, Prev_Given_Name, Gender, Birth_Place, Country_Birth, National_Id_Number, Religion,	Identity_Marks, Education, Nationality_By_Birth, At_Least_Two_Years, Passport_Number, Passport_Issue_Place, Passport_Issue_Date, Passport_Expiry_Date, Other_Passport, Other_Ppt_Country_Issue, Other_Ppt_No, Other_Ppt_Issue_Date, Other_Ppt_Issue_Place, Other_Ppt_Nationality, Address1, City_Town_Vllage, Pres_Country, State_Name, Pincode, Pres_Phone, Fthrname, Father_Nationality, Father_Previous_Nationality, Father_Country_Of_Birth, Mother_Name, Mother_Nationality, Mother_Previous_Nationality, Mother_Place_Of_Birth, Mother_Country_Of_Birth, Marital_Status, Spouse_Name, Spouse_Nationality, Spouse_Previous_Nationality, Spouse_Place_Of_Birth, Spouse_Country_Of_Birth, Grandparent_Flag, Grandparent_Details, Occupation, Empname, Empdesignation, Empaddress, Empphone, Previous_Occupation, Prev_Org, Previous_Organization, Previous_Designation, Previous_Rank, Previous_Posting, Visa_Serreq_Id_1, Exitpoint, Old_Visa_Flag, Prv_Visit_Add1, Visited_City, Old_Visa_Type_Id, Oldvisaissueplace, Oldvisaissuedate, Refuse_Flag, Refuse_Details, Country_Visited, Saarc_Flag, SaarcCountry1, SaarcYear1, SaarcVisitNo, Nameofsponsor_Ind, Add1ofsponsor_Ind, Phoneofsponsor_Ind, Nameofsponsor_Msn, Add1ofsponsor_Msn, Phoneofsponsor_Msn, Business_Prep, Company_Name, Company_Address, Company_Phone, Company_Website, Nature_Of_Company, Business_Card)
   VALUES ('$PassportType','$Nationality', '$PortOfArrival', '$VisaType', '$PurposeOfVisit','$PassportImage','$SelfiImage','$Email','$ValidateEmail','$DateOfBirth','$ExpectedArrivalDate','$Surname','$GivenName','$PrevSurame','$PrevGivenName','$Gender','$BirthPlace','$CountryBirth','$NationalIdNumber','$Religion','$IdentityMarks','$Education', '$NationalityByBirth','$AtLeastTwoYears', '$PassportNumber', '$PassportIssuePlace', '$PassportIssueDate', '$PassportExpiryDate', '$OtherPassport', '$OtherPptCountryIssue', '$OtherPptNo', '$OtherPpptIssueDate', '$OtherPptIssuePlace', '$OtherPptNationality', '$Address1', '$CityTownVillage', '$PresCountry', '$StateName', '$Pincode', '$PresPhone', '$Fthrname', '$FatherNationality','$FatherPreviousNationality', '$FatherCountryOfBirth', '$MotherName', '$MotherNationality', '$MotherPreviousNationality', '$MotherPlaceOfBirth', '$MotherCountryOfBirth', '$MaritalStatus', '$SpouseName', '$SpouseNationality', '$SpousePreviousNationality', '$SpousePlaceOfBirth', '$SpouseCountryOfBirth', '$GrandparentFlag', '$GrandparentDetails', '$Occupation', '$Empname', '$Empdesignation', '$Empaddress', '$Empphone', '$PreviousOccupation', '$PrevOrg' , '$PreviousOrganization', '$PreviousDesignation', '$PreviousRank', '$PreviousPosting', '$VisaSerreqId1', '$Exitpoint', '$OldVisaFlag', '$PrvVisitAdd1', '$VisitedCity', '$OldVisaTypeId', '$Oldvisaissueplace' ,'$Oldvisaissuedate', '$RefuseFlag', '$RefuseDetails', '$CountryVisited', '$SaarcFlag', '$SaarcCountry1', '$SaarcYear1', '$SaarcVisitNo', '$NameofsponsorInd', '$Add1ofsponsorInd', '$PhoneofsponsorInd', '$NameofsponsorMsn', '$Add1ofsponsorMsn', '$PhoneofsponsorMsn', '$BusinessPrep', '$CompanyName', '$CompanyAddress', '$CompanyPhone', '$CompanyWebsite', '$NatureOfCompany', '$BusinessCard')";
    if ($conn->query($sql) === TRUE) {
     echo "New record created successfully";
    }else {
     echo "Error: " . $sql . "<br>" . $conn->error;
     }


     $sql = "SELECT * FROM main";
$sth = $conn->query($sql);

while($result=mysqli_fetch_array($sth)){  
echo '<img width="600" height="600"  src="data:image;base64,'.$result['Business_Card'].'"/>';
// echo '<img width="600" height="600"  src="data:image;base64,'.$result['Selfi_Image'].'"/>';
}
$conn->close();

    ?>
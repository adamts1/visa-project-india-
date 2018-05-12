<?php
include 'conn.php';
   $PassportType = isset($_POST['passport_type']) ? $_POST['passport_type'] : '';
   $Nationality = isset($_POST['nationality']) ? $_POST['nationality'] : '';
   $PortOfArrival = isset($_POST['port_of_arrival']) ? $_POST['port_of_arrival'] : '';
   $VisaType = isset($_POST['visa_type']) ? $_POST['visa_type'] : '';
   $PurposeOfVisit = isset($_POST['purpose_of_visit']) ? $_POST['purpose_of_visit'] : '';
   //Passport pic
   $PassportImage = $_FILES['passport_image']['tmp_name'];
   $PassportImage = file_get_contents($PassportImage);
   $PassportImage = base64_encode($PassportImage);
   //Selfi pic
   $SelfiImage = $_FILES['selfi_image']['tmp_name'];
   $SelfiImage = file_get_contents($SelfiImage);
   $SelfiImage = base64_encode($SelfiImage);
   //
   $Email = isset($_POST['email']) ? $_POST['email'] : '';
   $ValidateEmail = isset($_POST['validate_email']) ? $_POST['validate_email'] : '';
   $DateOfBirth = isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : '';
   $ExpectedArrivalDate = isset($_POST['expected_arrival_date']) ? $_POST['expected_arrival_date'] : '';
   $Surname = isset($_POST['surname']) ? $_POST['surname'] : '';
   $GivenName = isset($_POST['given_name']) ? $_POST['given_name'] : '';
   $ChangedSurnameCheck = isset($_POST['changed_surname_check']) ? $_POST['changed_surname_check'] : '';
   $PrevSurame = isset($_POST['prev_surname']) ? $_POST['prev_surname'] : '';
   $PrevGivenName = isset($_POST['prev_given_name']) ? $_POST['prev_given_name'] : '';
   $Gender = isset($_POST['gender']) ? $_POST['gender'] : '';
   $BirthPlace = isset($_POST['birth_place']) ? $_POST['birth_place'] : '';
   $CountryBirth = isset($_POST['country_birth']) ? $_POST['country_birth'] : '';
   $NationalIdNumber = isset($_POST['national_id_number']) ? $_POST['national_id_number'] : '';
   $Religion = isset($_POST['religion']) ? $_POST['religion'] : '';
   $IdentityMarks = isset($_POST['identity_marks']) ? $_POST['identity_marks'] : '';
   $Education = isset($_POST['education']) ? $_POST['education'] : '';
   $NationalityByBirth = isset($_POST['nationality_by_birth']) ? $_POST['nationality_by_birth'] : '';
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
   $BusinessCard = $_FILES['business_card']['tmp_name'];
   $BusinessCard = file_get_contents($business_card);
   $BusinessCard = base64_encode($business_card);
   //Business fields
   $Business_prep = isset($_POST['business_prep']) ? $_POST['business_prep'] : '';
   $Company_name = isset($_POST['company_name']) ? $_POST['company_name'] : '';
   $Company_address = isset($_POST['company_address']) ? $_POST['company_address'] : '';
   $Company_phone = isset($_POST['company_phone']) ? $_POST['company_phone'] : '';
   $Company_website = isset($_POST['company_website']) ? $_POST['company_website'] : '';
   $Nature_of_company = isset($_POST['nature_of_company']) ? $_POST['nature_of_companyB'] : '';

   



//    $portOfArrival = $_POST['port_of_arrival'];
//    $visaType = $_POST['visa_type'];
// echo $DateOfBirth;
// echo $PassportType;



$sql = "INSERT INTO main (Passport_Image,Selfi_Image)
VALUES ('$PassportImage','$SelfiImage')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "SELECT * FROM main";
$sth = $conn->query($sql);

while($result=mysqli_fetch_array($sth)){  
echo '<img width="600" height="600"  src="data:image;base64,'.$result['Passport_Image'].'"/>';
echo '<img width="600" height="600"  src="data:image;base64,'.$result['Selfi_Image'].'"/>';
}
// $conn->close();



    
 


?>
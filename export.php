<?php
/*******EDIT LINES 3-8*******/
// $DB_Server = "localhost"; //MySQL Server    
// $DB_Username = "username"; //MySQL Username     
// $DB_Password = "password";             //MySQL Password     
// $DB_DBName = "databasename";         //MySQL Database Name  
// $DB_TBLName = "main"; //MySQL Table Name   
// $filename = "excelfilename";         //File Name
/*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/    
include 'conn.php';

//create MySQL connection   
// $sql = "Select * from $DB_TBLName";
$result = mysqli_query($conn, 'SELECT * FROM main where id ="980" ');
while ($property = mysqli_fetch_field($result)) {
    echo $property->name;
 

    //  $result = $stmt->get_result();
$file_ending = "xls";
//header info for browser
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
/*******Start of Formatting for Excel*******/   
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; //tabbed character
//start of printing column names as names of MySQL fields
// for ($i = 0; $i < mysqli_num_fields($result); $i++) {
// echo mysql_field_name($result,$i) . "\t";
// }
print("\n");    
//end of printing column names  
//start while loop to get data
    while($row = mysqli_fetch_row($result))
    {
        $schema_insert = "";
        for($j=0; $j<mysqli_fetch_array($result);$j++)
        {
            if(!isset($row[$j]))
                $schema_insert .= "NULL".$sep;
            elseif ($row[$j] != "")
                $schema_insert .= "$row[$j]".$sep;
            else
                $schema_insert .= "".$sep;
        }
        $schema_insert = str_replace($sep."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
    }   

}
?>
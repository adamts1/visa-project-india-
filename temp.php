<?php

echo "<table>";
echo "
<tr bgcolor='#f1f1f1' dir='rtl'><td>$row->Passport_Type	</td><td><b>שם</b> </td></tr>
<tr dir='rtl'><td>$row->Nationality</td><td><b>סוג דרכון</b></td></tr>
<tr bgcolor='#f1f1f1'><td>$row->Port_Of_Arrival</td><td><b>Mark</b></td></tr>
<tr><td>$row->Visa_Type</td><td><b>Address</b></td></tr>
<tr bgcolor='#f1f1f1'><td>$row->Purpose_Of_Visit</td><td><b>Image</b></td></tr>
<tr bgcolor='#f1f1f1'><td>$row->Passport_Image</td><td><b>Image</b></td></tr>
<tr bgcolor='#f1f1f1'><td>$row->Selfi_Image</td><td><b>Image</b></td></tr>
";
echo "</table>";

?>
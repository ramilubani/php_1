<?php
// PHP program to check if a string has all
// lower case characters
 
$strings = array('gfg123', 'Rami', 'rami');
 
// Checking for above three strings one by one.
foreach ($strings as $testcase) {
    if (ctype_lower($testcase)) {
        echo "Yes"."<br>";
    } else {
        echo "No"."<br>";
    }
}
?>
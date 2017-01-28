<?php
/*
 *code include file
 *input:
 *  $connection
 *output:
 *  $subject[]
 *  $sub_id[]
 *  Also, echo a table header for subject
 */
            $dbRowCollect = mysqli_query($connection, 'SELECT * FROM subject');
            if ($dbRowCollect == False) {
                echo('null database');
            }
            $subject = array();
            $sub_id = array();
            while ($dbRow = mysqli_fetch_array($dbRowCollect)) {
                $subject[] = $dbRow['subName'];
                $sub_id[] = $dbRow['subId'];
            }
            echo "<table border='1'><tr>";
            echo "<th> </th>";
            for($i=0; $i<count($subject); $i++) {
                echo "<th>".$subject[$i]."</th>";
            }
            echo "</tr>";
?>
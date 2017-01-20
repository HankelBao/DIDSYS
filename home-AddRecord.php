<html>
    <head>
    </head>
    <body>
        <?php
            require('database/databaseConnect.php');
            $result = mysqli_query($connection, 'SELECT * FROM subject');
            if ($result == False) {
                echo('null database');
            }
            $subject = array();
            $sub_id = array();
            while ($row = mysqli_fetch_array($result)) {
                $subject[] = $row['subject_name'];
                $sub_id[] = $row['subject_id'];
            }
            echo "<table border='1'><tr>";
            echo "<th> </th>";
            for($i=0; $i<count($subject); $i++) {
                echo "<th>".$subject[$i]."</th>";
            }
            echo "</tr>";
            
            $result = mysqli_query($connection, 'SELECT * FROM class');
            if ($result == False) {
                die('null database');
            }
            $class = array();
            $cla_id = array();
            while ($row = mysqli_fetch_array($result)) {
                $class[] = $row['class_name'];
                $cla_id[] = $row['class_id'];
            }
            echo "<form action='database/scoreSubmit.php' method='POST'";
            for($i=0; $i<count($class); $i++) {
                echo "<tr>";
                echo "<th>";
                echo $class[$i];
                echo "</th>";
                for ($j = 0; $j < count($subject); $j++) {
                    echo "<th>";
                    echo "<input name='score_pos[]' type='text'/>";
                    echo "<input name='score_cla[]' value='".$cla_id[$i]."' style='display:none'\>";
                    echo "<input name='score_sub[]' value='".$sub_id[$j]."' style='display:none'\>";
                    echo "</th>";
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "<button type='submit'>Submit</button>";
            
            echo "</form>";
            
            require('database/databaseClose.php');
        ?>
    </body>
</html>
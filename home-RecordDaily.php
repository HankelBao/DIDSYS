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
            for($i=0; $i<count($class); $i++) {
                echo "<tr>";
                echo "<th>";
                echo $class[$i];
                echo "</th>";
                for ($j = 0; $j < count($subject); $j++) {
                    echo "<th>";
                    $result = mysqli_query($connection, 'SELECT * FROM serial where subject_id = '.$sub_id[$j].' and class_id = '.$cla_id[$i]);
                    if($result) {
                        $row = mysqli_fetch_array($result);
                        echo $row['score'];
                    } else {
                        echo "null";
                    } 

                    //echo $score;
                    echo "</th>";
                }
                echo "</tr>";
            }
            echo "</table>";
            
            require('database/databaseClose.php');
        ?>
    </body>
</html>
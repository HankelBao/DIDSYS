
        <?php
            require('database/databaseConnect.php');
            require('database/serialSearch.php');
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
                    $row = serialSearch($connection, date('y-m-d',time()), $sub_id[$j], $cla_id[$i]);
                    if ($row != "null")
                        echo $row['score'];
                    echo "</th>";
                }
                echo "</tr>";
            }
            echo "</table>";
            
            require('database/databaseClose.php');
        ?>

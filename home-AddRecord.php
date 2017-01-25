       <?php
            require('database/databaseConnect.php');
            require('database/subTableHead.php');
            require('database/claLoad.php');

            session_start();
            echo "<form action='database/scoreSubmit.php' method='POST'>";
            echo "<input name='score_date' value='".date('y-m-d',time())."' style='display:none'\>";
            echo "<input name='score_time' value='".date('y-m-d h:i:s',time())."' style='display:none'\>";
            echo "<input name='scorer' value='".$_SESSION['scorer_id']."' style='display:none'\>";
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

            require('database/subTableEnd.php');
            echo "<button type='submit'>Submit</button>";
            echo "</form>";
            
            require('database/databaseClose.php');
        ?>
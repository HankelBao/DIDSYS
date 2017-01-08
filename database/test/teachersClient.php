<html>
    <head>
        <title>TeachersClient</title>
    </head>
    <body>
        <h1>TeachersClient</h1>
        <h5>Warning: you don't have the permission to add homework</h5>
        <hr>
        <form action="add.php" method="post" enctype="multipart/form-data">
            date:
            year:<select name="dy">
                <?php
                    for ($x = 2016; $x <= 2019; $x++)
                        echo "<option value=".$x.">".$x."</option>";
                ?>
            </select>
            month:<select name="dm">
                <?php
                    for ($x = 1; $x <= 12; $x++)
                        echo "<option value=".$x.">".$x."</option>";
                ?>
            </select>
            day:<select name="dd">
                <?php
                    for ($x = 1; $x <= 31; $x++)
                        echo "<option value=".$x.">".$x."</option>";
                ?>
            </select>
            </br>
            the subject: <select name="sub">
                <option value="All">All</option>
                <option value="Eng">Eng</option>
                <option value="EcoChi">Eco Chinese</option>
                <option value="EcoFor">Eco Foreign</option>
                <option value="MathsChi">Maths Chinese</option>
                <option value="MathsFor">Maths Foreign</option>
                <option value="PhyChi">Physics Chiense</option>
                <option value="PhyFor">Physics Foreign</option>
                <option value="ChemChi">Chemistry Chinese</option>
                <option value="ChemFor">Chemistry Foreign</option>
            </select></br>
            due:<input type="text" name="due"></br>
            description:<input type="text" name="des"></br>
            <lable for="file">Filename:</lable>
            <input type="file" name="file"/>
            <input type="submit" name="submit">
        </form>
    </body>
</html>
<html>

<head>
    <title>DID - Edit Scorers</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
    <script type="text/JavaScript" src="js/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="theme/layout.css" />
    <link type="text/css" rel="stylesheet" href="theme/edit-scorer.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <script type="text/javascript">
    
    var scorerId;
    var classPermissedId = new Array();
    var classUnpermissedId = new Array();
    var classId = new Array();
    var className = new Array();

    function classSubmit() {
        alert("classSubmit");
    }
    function scorerSubmit(scorerId) {
        $.get("handler/editScorer.php?action=getClassAll", function(data){
            return_array = JSON.parse(data);
            classId = return_array.idArray;
            className = return_array.nameArray;            
        });
        $.get("handler/editScorer.php?action=getClassPermissed&scorerId="+scorerId, function(data){
            classPermissedId = JSON.parse(data);
        });
        classUnpermissedId = compareTwoArray(classPermissedId, classId);
        $("#class-permission-all").html(result);
    }

    function compareTwoArray(array1, array2) {
        var result = new Array();
        for(var i = 0; i < array2.length; i++){
            var obj = array2[i];
            var num = obj.Num;
            var isExist = false;
            for(var j = 0; j < array1.length; j++){
                var aj = array1[j];
                var n = aj.Num;
                if(n == num){
                    isExist = true;
                    break;
                }
            }
            if(!isExist){
                result.push(obj);
            }
            //alert(result);
        }
        return result;
    }
    </script>
</head>

<body>
    <div class="left-div">
        <!--这里是评分员名称-->
        <?php
        require_once('srvr/dbScorer.php');
        $scorerId = scorer::getIdArray();
        $scorerName = scorer::getNameArray();
        for ($i = 0; $i < count($scorerId); $i++) {
            echo "<li id='".$scorerId[$i]."' onclick='scorerSubmit(this.id)'>".$scorerName[$i]."</li>";
        }
        ?>
    </div>
    <div class="right-div">
        <div id="class-permission" class="right-top-div">
            <!--权限（班级）-->
            <div class="class-permission-owned" id="class-permission-owned">
            </div>
            <div class="class-permission-all" id="class-permission-all">
            </div>
            <div class="submit-div">
                <button onclick="classSubmit()" style="height:100%;width:100%" class="submit-button">submit</button>
            </div>
        </div>

        <div class="right-bottom-div">
            <!--权限（项目）-->

        </div>
    </div>
</body>

</html>
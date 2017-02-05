var scorerId;
var classId = new Array();
var className = new Array();
var classPermissedId = new Array();
var classUnpermissedId = new Array();

function classSubmit() {
    alert("classSubmit");
}

function scorerSubmit(scorerId) {
    $.get("handler/editScorer.php?action=getClassAll", function(data){
        return_array = JSON.parse(data);
        classId = return_array.idArray;
        for (i=0; i<classId.length; i++) {
            className[classId[i]] = return_array.nameArray[i];
        }
        $.get("handler/editScorer.php?action=getClassPermissed&scorerId="+scorerId, function(data){
            classPermissedId = JSON.parse(data);
            classUnpermissedId = compareTwoArray(classId, classPermissedId);
            updateClass();
        });
    });
}

function compareTwoArray(array1, array2) {
    var result = new Array();
    var isExist;

    for(var i = 0; i < array1.length; i++){
        isExist = false;
        for(var j = 0; j < array2.length; j++){
            if(array1[i] == array2[j]){
                isExist = true;
                break;
            }
        }
        if(!isExist){
            result.push(array1[i]);
        }
    }
    return result;
}

function updateClass() {
    var permissedHTML = "";
    for (i=0; i<classPermissedId.length; i++) {
        permissedHTML += className[classPermissedId[i]]+" ";
    }
    $("#class-permissed").html(permissedHTML);

    var unpermissedHTML = "";
    for (i=0; i<classUnpermissedId.length; i++) {
        unpermissedHTML += "<label onclick='changeFromUnpermissed(this.id)' id="+classUnpermissedId[i]+">"+className[classUnpermissedId[i]]+" </label>";
    }
    $("#class-unpermissed").html(unpermissedHTML);
}

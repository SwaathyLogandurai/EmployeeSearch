<!DOCTYPE html>
<head>
<style>
<?php
include_once('./Assets/style.css');
?>
</style>
</head>
<body>
<form name="myForm" action="server.php" method="post" onSubmit="return validateForm()">
<div>
<?php
echo "Search Employee :"
?> <input type="text" name="employeeName"/>
<input type="submit" name="formSubmit" value="Search" />
</div>
<div class="error" id="msg"/>
</form>
<script>
function validateForm(){
    var eName=document.forms['myForm']['employeeName'].value;
    if(eName=="" || eName.length<3)
    {
       document.getElementById("msg").innerHTML="Please enter minimum 3 characters to search Employee";
        return false;
    }
}
</script>
</body>
</html>

<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your user name is: <?php echo $_POST["user"]; ?><br>

<?php
$str = "name";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>

<?php
$email = "john.doe@example.com";

// this will remove all illegal character like $,#,%,&,@
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// it will validate all it is email or not 
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
?>
</body>
</html>
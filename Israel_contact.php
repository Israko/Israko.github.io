<?php

if (isset($_POST['submit'])){
$fullname = $_POST['fname'];
$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['message'];

if (!filter_var($fullname, FILTER_VALIDATE_INT)) {
    echo "Invalid name";
}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "Invalid email";
}else if (filter_var($title, FILTER_VALIDATE_INT)){
    echo "Invalid title";
}else if (filter_var($message, FILTER_VALIDATE_INT)){
    echo "Invalid message";
}else if (strlen($fullname) < 4){
    echo "Name cannot be less than 4 characters";
}else if (strlen($message) < 20){
    echo "Message Length too short";
}else{
	echo "Message Sent Successfully!";

}
}
?>


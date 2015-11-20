<?php

echo $_POST["myText"];


if (isset($_POST['myText'])) {

echo (htmlspecialchars($_POST['myText']));



$_SESSION['USER'] = $_POST['myText'];


 }

 header("Location: localhost:8888/");

 ?>

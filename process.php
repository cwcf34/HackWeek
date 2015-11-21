<?php


if (isset($_POST['myText'])) {

  $cookie_name = "word";
  $cookie_value = (htmlspecialchars($_POST['myText']));
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

 }

 header("Location: http://codycameron.me");

 ?>

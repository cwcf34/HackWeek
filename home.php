<?php if(session_start()) { echo "woo";} ?>
  <div class="header">
<script>var SELECTION;</script>
  <h1>OneWord</h1>
  <h2>Enter 1 Word</h2>
</div>

<form action="process.php" method="POST">
<label for="word">Word</label>
<input type="text" name='myText' id="myText" style="background-color: #090067" placeholder="Houdini">
<div class"content">
<p>Click the Button to see something awesome happen!</p>

<button type="submit" class="button-secondary pure-button">Submit</button>
</form>
  </div>
<?php

  if (isset($_POST['myText'])) {?>

<?php

echo (htmlspecialchars($_POST['myText']));

session_start();

$_SESSION['USER'] = $_POST['myText'];
 ?>

<?php } ?>

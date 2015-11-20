
<div id = "main">
  <div class="header">
<script>var SELECTION;</script>
  <h1>OneWord</h1>
  <h2>Enter 1 Word</h2>
</div>
<form method="post">
<fieldset>
<label for="word">Word</label>
<input type="text" name='myText' id="myText" style="background-color: #090067"placeholder="Houdini">
<div class"content">
<p>Click the Button to see something awesome happen!</p>

<button type="Submit" class="button-secondary pure-button">Submit</button>
</form>
<script>
function myFunction() {
    //document.getElementById("myText").value = "Johnny Bravo";
    //SELECTION = document.getElementById("myText").value;
    //window.alert(SELECTION);
}
</script>

<?php

  if isset($_POST['myText']) : ?>

<?php

echo $_POST['myText'];
 ?>

<?php endif?>


</fieldset>
  </div>
</div>

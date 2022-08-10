<?php
// if(isset($_POST['submit']))
$num1 = $_POST['name'];
$num2 = $_POST['email'];


echo '<pre>';
// print_r($_POST);
$ans = $num1 + $num2;

echo $ans;

?>

<form method="post">
    <input type="textbox" name="name" /><br>
    <input type="textbox" name="email" /><br>
<input type="submit" name='submit' />
</form>

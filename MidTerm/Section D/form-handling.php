<form method="POST">
  <input type="text" name="username" placeholder="Enter Username">
  <input type="email" name="useremail" placeholder="Enter Email">
  <button type="submit">Send</button>
</form>

<?php
if($_POST){
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];

    if($username=="" || $useremail==""){
        echo "Please fill all fields!";
    } else {
        echo "<h3>User Details</h3>";
        echo "Username: " . $username . "<br>";
        echo "Email: " . $useremail . "<br><br>";
    }
}
?>

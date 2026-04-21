<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(#A1C4FD, #C2E9FB);
    min-height: 100vh;
}

.card{
    margin-top: 90px;
    padding: 25px;
    border-radius: 20px;
    background: white;
}

h3{
    color: #2c3e50;
    font-weight: bold;
}
</style>
</head>

<body>

<div class="container">
<div class="row justify-content-center">
<div class="col-md-5">

<div class="card shadow">

<h3 class="text-center">Student Registration Form</h3>

<!-- FORM -->
<form method="POST">

<input type="text" name="name" class="form-control my-2" placeholder="Enter Full Name">

<input type="email" name="email" class="form-control my-2" placeholder="Enter Email Address">

<input type="text" name="roll" class="form-control my-2" placeholder="Enter Roll Number">

<button type="submit" class="btn btn-success w-100">Submit</button>

</form>

<!-- PHP -->
<?php
if($_POST){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $roll = $_POST['roll'];

    if($name=="" || $email=="" || $roll==""){
        echo "<p style='color:red;'>All fields are required!</p>";
    }
    else{
        echo "<div class='mt-3 p-3 border rounded'>";
        echo "<h4 style='color:green;'>Registration Successful</h4>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Roll No: " . $roll;
        echo "</div>";
    }
}
?>

</div>

</div>
</div>
</div>

</body>
</html>
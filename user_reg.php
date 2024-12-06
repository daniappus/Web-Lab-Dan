<!DOCTYPE html>
<?php

include 'dbconnection.php';

if(isset($_POST['submit']))

{

	$fname=$_POST['first_name'];

	$lname=$_POST['last_name'];

	$cno=$_POST['contact_no'];

	$email=$_POST['email_id'];

	$uname=$_POST['user_name'];

	$psswrd=$_POST['password'];

	$sql = "INSERT INTO userreg(first_name,last_name,contact_no,email_id,user_name,password)VALUES ('$fname','$lname','$cno','$email','$uname','$psswrd')";


	if (mysqli_query($conn, $sql)) {

  		echo "New record created successfully";

		} else {

  		echo "Error: " . $sql . "<br>" . mysqli_error($conn);

		}


	mysqli_close($conn);

}

else

{


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-button:hover {
            background-color: #0056b3;
        }

        .form-footer {
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }

        .form-footer a {
            text-decoration: none;
            color: #007bff;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Register</h1>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" required placeholder="Enter your first name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" required placeholder="Enter your last name">
            </div>
            <div class="form-group">
                <label for="contact_no">Contact Number</label>
                <input type="tel" id="contact_no" name="contact_no" required placeholder="Enter your contact number">
            </div>
            <div class="form-group">
                <label for="email_id">Email Address</label>
                <input type="email" id="email_id" name="email_id" required placeholder="Enter your email address">
            </div>
            <div class="form-group">
                <label for="user_name">Username</label>
                <input type="text" id="user_name" name="user_name" required placeholder="Choose a username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="Create a password">
            </div>
            <input type="submit" class="form-button" name="submit" value="Register">
        </form>
        <div class="form-footer">
            <p>Already have an account? <a href="#">Login</a></p>
        </div>
    </div>

</body>
</html>
<?php
}
?>
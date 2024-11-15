<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
</head>
<body>
  <?php 
  // validation form thi se co cac truong name, user name , email ,password 
  $name = $user_name = $email = $password =$gender= "";
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $name = test_input($_POST["name"]);
    $user_name = test_input($_POST["user_name"]);
    $email = test_input($_POST["user_email"]);
    $password = test_input($_POST["user_pass"]);
    $gender = test_input($_POST['gender']);
  }

  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data; 
  }


  ?>
  <h2>Form validation test XXS</h2>
  <form action="test.php" method="post">
    Name: <input type="text" name="name" id="name">
    <br>
    <br>
    Username : <input type="text" name="user_name" id="user_name">
    <br>
    <br>
    Email: <input type="email" name="user_email" id="user_email" required>
    <br>
    <br>
    Password : <input type="password" name="user_pass" id="user_pass" required>
    <br>
    Gender
    <input type="radio" name="gender" value="Female">Female</input>
    <input type="radio" name="gender" value="Male">Male</input>
    <input type="radio" name="gender" value="Other">Other</input>  
    <br>
    <br>
    <button type="submit">Register</button>
  </form>
<?php 
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $user_name;
echo "<br>";
echo $email;  
echo "<br>";
echo $password; 
echo "<br>";  
echo $gender; 

?>
</body>
</html>
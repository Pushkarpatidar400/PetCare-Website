<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Customer Registration Form </title>
  <link rel="icon" href="images/icon1.jpeg" />
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <?php
  $Full_Name = $Mobile_no = $Email = $Address = $City = $Password = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $con = mysqli_connect("localhost", "root", "", "pet_care");
    $stmt = $con->prepare("SELECT * FROM customer WHERE Email = ? AND Password = ?");
    $stmt->bind_param('ss', $Email, $Password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
      echo '<script>
              window.location.href="index.php";
              alert("Already a Customer , Please Login ! Or Register with New Email !!");
              </script>';
      exit();
    } else {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Name = $_POST['Name'];
        $Mobile = $_POST['Mobile'];
        $Email = $_POST['Email'];
        $Address = $_POST['Address'];
        $City = $_POST['City'];
        $Password = $_POST['Password'];
        $con = mysqli_connect("localhost", "root", "", "pet_care");
        $query = "INSERT INTO customer(Name,Mobile,Email,Address,City,Password) VALUES ('$Name', '$Mobile', '$Email', '$Address', '$City', '$Password')";
        $result1 = mysqli_query($con, $query);
        if ($result1) {
          echo '<script>
          window.location.href="index.php";
          alert("Register Successfully , Now You Can login !");
          </script>';
        } else {
          echo ("Registration Failed ");
        }
      }
      $stmt->close();
      $con->close();
    }
  }
  ?>






  <div class="container">

    <form action="" method="POST">
      <input type="button" value=" &#x2718" onclick="history.back()">
    </form>

    <div class="title"> Customer Registration</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" id="Name" name="Name" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Mobile</span>
            <input type="digit" id="Mobile" name="Mobile" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" id="Email" name="Email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" id="Address" name="Address" placeholder="Address" required>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <input type="text" id="City" name="City" placeholder="Enter your City" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" id="Password" name="Password" placeholder="Enter your password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
        <div class="signup-link">Already Have a account ? <a href="index.php"> Login now </a></div>
      </form>
    </div>
  </div>

</body>

</html>
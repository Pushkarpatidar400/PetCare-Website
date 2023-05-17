<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> Pet Registration Form </title>
  <link rel="icon" href="images/icon.png" />
  <link rel="stylesheet" href="css/style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>



  <?php
  $Name = $Mobile = $Email = $Pet_Type = $From_Date = $To_Date = $Services = $Address = $City = $Payment = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = $_POST['Email'];
    $con = mysqli_connect("localhost", "root", "", "pet_care");
    $stmt = $con->prepare("SELECT * FROM customer WHERE Email = ? ");
    $stmt->bind_param('s', $Email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Name = $_POST['Name'];
        $Mobile = $_POST['Mobile'];
        $Email = $_POST['Email'];
        $Pet_Type = $_POST['Pet_Type'];
        $From_Date = $_POST['From_Date'];
        $To_Date = $_POST['To_Date'];
        $Services = $_POST['Services'];
        $Address = $_POST['Address'];
        $City = $_POST['City'];
        $Payment = $_POST['Payment'];
        $con1 = mysqli_connect("localhost", "root", "", "pet_care");
        $query = "INSERT INTO pet_registration(Name,Mobile,Email,Pet_Type,From_Date,To_Date,Services,Address,City,Payment) VALUES 
        ('$Name','$Mobile','$Email','$Pet_Type','$From_Date','$To_Date','$Services','$Address','$City','$Payment')";
        $result2 = mysqli_query($con1, $query);
        if ($result2) {
          echo '<script>
          window.location.href="home.php";
          alert(" Pet Appointment Scheduled  Successfully ");
          </script>';
        } else {
          echo '<script>
          window.location.href="index.php";
          alert(" Not Registered Successfully ");
          </script>'; }}
      exit();
    } else {
      echo '<script>
      window.location.href="Register.php";
      alert("You are not Registered !!, Please Do Register First");
      </script>';
      $stmt->close();
      $con->close();
    }}
  ?>



  <div class="container">

    <form action="" method="POST">
      <input type="button" value=" &#x2718" onclick="history.back()">
    </form>
    <div class="title">Pet Registration</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" placeholder="" id="Name" name="Name" required>
          </div>
          <div class="input-box">
            <span class="details">Mobile</span>
            <input type="text" placeholder="" id="Mobile" name="Mobile" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" placeholder="" id="Email" name="Email" required>
          </div>
          <div class="input-box">
            <span class="details">Pet_Type</span>
            <select class="details" class="input-box" style=" width: 300px;height: 7vh;border-radius: 6px " id="Pet_Type" name="Pet_Type" required>
              <option value='Dog' id="Pet_Type" name="Pet_Type" selected>Dog</option>
              <option value='Cat' id="Pet_Type" name="Pet_Type">Cat</option>
              <option value='Fish' id="Pet_Type" name="Pet_Type">Fish</option>
              <option value='Bird' id="Pet_Type" name="Pet_Type">Bird</option>
              <!-- <option value='' selected>Select a Pet</option> -->
            </select>
          </div>
          <div class="input-box">
            <span class="details">From_Date</span>
            <input type="date" placeholder="" id="From_Date" name="From_Date" required>
          </div>
          <div class="input-box">
            <span class="details">To_Date</span>
            <input type="date" placeholder="" id="To_Date" name="To_Date" required>
          </div>

          <div class="input-box">
            <span class="details"> Services</span>
            <select class="details" class="input-box" style="width: 300px;height: 7vh;border-radius: 6px " id="Services" name="Services" required>
              <option value='Boarding' id="Services" name="Services" selected>Boarding</option>
              <option value='Day Care' id="Services" name="Services">Day Care</option>
              <option value='Pets Dayout' id="Services" name="Services">Pets Dayout</option>
              <option value='Pool Sessions' id="Services" name="Services">Pool Sessions</option>
              <option value='Grooming' id="Services" name="Services">Grooming</option>
              <option value='Pet Clinic' id="Services" name="Services">Pet Clinic</option>
              <option value='Surgical Services' id="Services" name="Services">Surgical Services</option>
              <!-- <option value='' > I am looking for </option> -->
            </select>
          </div>

          <div class="input-box">
            <span class="details">Address</span>
            <input type="Address" placeholder="" id="Address" name="Address" required>
          </div>

          <div class="input-box">
            <span class="details">City</span>
            <input type="City" placeholder="" id="City" name="City" required>
          </div>

          <div class="input-box">
            <span class="details"> Payment</span>

            <select class="details" class="input-box" style="width: 300px;height: 7vh;border-radius: 6px " id="Payment" name="Payment" required>
              <option value='Cash' id="Payment" name="Payment" selected> Cash</option>
              <!-- <option value='' selected> Mode </option> -->
            </select>
          </div>

        </div>
        <div class="button">
          <input type="submit" value="Schedule">
        </div>
    </div>
    <div class="signup-link">Don't Have a account ? <a href="Register.php"> Register now </a></div>
    </form>
  </div>
  </div>

</body>

</html>
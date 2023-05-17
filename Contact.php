<?php
        // put your code here
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $Mobile = $_POST['Mobile'];
            $Subject = $_POST['Subject'];
            $Message = $_POST['Message'];

            $con = mysqli_connect("localhost", "root", "", "pet_care");
            $query = "INSERT INTO contact(Name,Email,Mobile,Subject,Message) VALUES
            ('$Name','$Email','$Mobile','$Subject','$Message')";
            $result = mysqli_query($con, $query);
            if ($result) {
                echo '<script>
                window.location.href="index.php";
                alert("Details Submitted !");
                </script>';
                // header("location:index.php");
            } else {
                echo ("Details not Submitted");
            }
        }

        ?>

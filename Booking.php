<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petcare Taker website</title>
    <link rel="icon" href="images/icon.jpg" />
    <style>
        .home {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: url(../images/home.jpg) no-repeat;
            background-size: cover;
            background-position: top;
            font-family: "Times New Roman", Times, serif;
        }

        .home .content {
            font-family: "Times New Roman", Times, serif;
            display:flex;
            flex-direction:column;
            align-items:center;
            width:100vw;
        }

        .home .image {
            flex: 1 1 31rem;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        .home .content h1 {
            text-align: end;
            margin-top: 0px;
            font-size: 2.5em;
        }

        .home .content h2 {
            display: block;
            font-size: 1.5em;
            margin-block-start: 1em;
            /* margin-inline-start: 600px; */
            margin-inline-end: 0px;
            font-weight: bold; 
            color: black;
        }

        .home .content table {
            margin: auto;
            margin-bottom: 20px;
            border-collapse: collapse;
            width: 80%;
            max-width: 900px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-size: 1.5em;
            /* font-weight: bold; */
            display: table;
            border-collapse: separate;
            box-sizing: border-box;
            text-indent: initial;
            border-spacing: 2px;
            border-color: gray;
            float: right;
            animation:spin 2s;
        }
        td:hover{
            opacity:1;
            cursor: pointer;
            transform: scale(1.15);
        }
        /* table:hover{
            transform: rotate(2turn);
        } */
        @keyframes spin{
            0%{
                transform: translateX(-3000px);
            }
            100%{
                transform: translateX(0px);
            }
        }
        

        .home .content p {
            display: block;
            font-size: 1.5em;
            font-weight: bold;
            color: white;
        }

        .home .content th,
        td {
            padding: 7px 5px;
            text-align: center;
            border: 1px solid #ddd;
        }

        .home .content th, td {
            background-color: #333;
            opacity:0.7;
            color: #fff;
        }


        
    </style>

</head>

<body>



    <section class="home" id="home">

        <div class="content">

        <form action="" method="POST">
      <input type="button" value="<<Back" onclick="history.back()">
    </form>

            <h1>Welcome to PetCare</h1>

            <?php

            session_start();
            $username = $_SESSION['username'];
            echo  "<p>Hi, " . "$username" . "</p>";

            echo "<h2>Your Appointments</h2>";

            $con = mysqli_connect("localhost", "root", "", "pet_care");

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $sql = "select * from pet_registration where Email LIKE '%$username%' ";
            $result = mysqli_query($con, $sql);

            echo "<table>
                       <tr>
                       <th>Name</th>
                       <th>Mobile</th>
                       <th>Pet Type</th> 
                       <th>From Date</th> 
                       <th>To Date</th> 
                       <th>Services</th>                        
                       </tr>";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["Name"] . "</td>";
                    echo "<td>" . $row["Mobile"] . "</td>";
                    echo "<td>" . $row["Pet_Type"] . "</td>";
                    echo "<td>" . $row["From_Date"] . "</td>";
                    echo "<td>" . $row["To_Date"] . "</td>";
                    echo "<td>" . $row["Services"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No appointments found</td></tr>";
            }

            mysqli_close($con);

            ?>



        </div>


    </section>

</body>

</html>
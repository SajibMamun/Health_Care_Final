<html>

<head>
    <title>Admin Panel</title>
   
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


   
    <style>
    
        .table-order,
        th,
        td {
            border: 5px solid black;
            border-collapse: collapse;
            text-align: center;
            margin-left: 320px;
            border-color: lightgrey;
            width: 900px;
            padding: 5px;
            /* box-shadow: inset -5px -5px 9px rgba(255, 255, 255, 0.45), inset 5px 5px 9px rgba(94, 104, 121, 0.3); */
            box-shadow: inset -10px -10px 15px rgba(255, 255, 255, 0.5),
                inset 10px 10px 15px rgba(70, 70, 70, 0.12);

        }

        th,
        td {
            background-color: papayawhip;
        }

        .tbl-frm {
            margin-top: 30px;
            margin-bottom: 30px;

        }

        .src {
            background-color: #ad4475;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .srcc {
            background-color: lightgray;
            padding: 10px;
            width: 500px;
            border-radius: 5px;
        }

        .tbl-frm {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tables {
            
            height: 400px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
         
        }
    </style>
</head>



<body>

    <div class="main">
        <section class="header">

        <a href="home.php" class="logo" style=" font-weight: 900;">Health Care</a>


            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="about.php">about</a>
                <a href="doctors.php">Doctors</a>
                <a href="view.php">Admin</a>
                <a href="book.php">Appointment</a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

        </section>
        <section class="tables">
            <div class="tbls">
                <form method="GET" action="" id="src" class="tbl-frm">
                    <div class="frm-con">
                        <input type="text" name="search" placeholder="Patient Contact" class="srcc">
                        <input type="submit" value="Search" class="src" style="margin-left: 30px; color: white;">
                    </div>
                </form>

                <table class="table-order">
                    <tr>
                        <th>Serial No</th>
                        <th>Patient Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Doctor Name</th>
                        <th>Appointment Date</th>
                        <th>Last Checkin</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>


                    <?php
                    $con = mysqli_connect('localhost', 'root', '', 'Health_Care');         /////////////////////
                    $search = isset($_GET['search']) ? $_GET['search'] : '';
                    $query = "SELECT * from Appoint_List ";                ////////////////////////////

                    // Append search condition to the query if search term is provided
                    if (!empty($search)) {
                        $query .= " WHERE Contact LIKE '%$search%'";          ////////////////////
                    }
                    $result = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($result)) :
                    ?>

                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Contact']; ?></td>
                            <td><?php echo $row['Doctor_Name']; ?></td>
                            <td><?php echo $row['Appointment_Date']; ?></td>
                            <td><?php echo $row['Last_Checkup']; ?></td>
                            <td><a href="update.php?updateid=<?php echo $row['id']; ?>" style=" color: green; font-weight: bold;">Update</a></td>
                            <td><a href="delete.php?deleteid=<?php echo $row['id']; ?>" style=" color: red; font-weight: bold;">Delete</a></td>
                        </tr>
                    <?php
                    endwhile;
                    ?>
                </table>
            </div>
        </section>
    
        <section class="footer" style="height: 500px">

<div class="box-container">

   <div class="box">
      <h3>quick links</h3>
      <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
      <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
      <a href="doctors.php"> <i class="fas fa-angle-right"></i> doctors</a>
      <a href="book.php"> <i class="fas fa-angle-right"></i> Appointment</a>
   </div>

   <div class="box">
      <h3>extra links</h3>
      <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
      <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
      <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
   </div>

   <div class="box">
      <h3>contact info</h3>
      <a href="#"> <i class="fas fa-phone"></i> +8801628778041 </a>
      <a href="#"> <i class="fas fa-phone"></i> +8801789027499 </a>
      <a href="#"> <i class="fas fa-envelope"></i>sajibmamun138@gmail.com </a>
      <a href="#"> <i class="fas fa-map"></i> Dhaka,Bangladesh - 1205 </a>
   </div>

   <div class="box">
      <h3>follow us</h3>
      <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
      <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
   </div>

</div>

<div class="credit">created by <span>Team stars </span> | all rights reserved! &copy; 2023 </div>

</section>

<!-- footer section ends -->



</body>

</html>
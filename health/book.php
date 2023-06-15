<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Health Care</title>



   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
   
   .btn {
      padding: 10px 20px;
      text-align: center;
      border: 3px solid ;
      font-size: 15px;
      box-shadow: 0 0 20px #eee;
      /* background-image: linear-gradient(to right, #fbc2eb 0%, #a6c1ee 51%, #fbc2eb 100%); */
   }

   .btn:hover {
 
      cursor: pointer;
      background-color:#1765BB;
      color: white;
   }
      label {
    margin-bottom: 10px;
    color: #333;
      font-size: 18px;
      display:
        
      }

      /* body {
         background-image: url(frmbck.jpg);
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
      } */

      input[type="text"] ,
      input[type="date"]{
         width: 80%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
      }
.buttoncont {
         text-align: center;
      }
      

      form {
        
      max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #C0C0C0;
    border: 1px solid #ccc;
    border-radius: 10px;
        
      }

      h2 {
         margin-top: 150px;
         margin-bottom: 50px;
         color: gold;
      }
   </style>

</head>

<body>

   <!-- header section starts  -->

   <section class="header">

   <a href="home.php" class="logo" style=" font-weight: 900;">Health Care</a>


      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="doctors.php">Doctors</a>
         <a href="book.php">appointment</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/appointment.jpg) no-repeat">

   </div>


   <?php
   if (isset($_POST['Submit'])) {
    

      $patientName=  $_POST['patientname']; 
      $patientEmail=  $_POST['patientemail']; 
      $patientContact=  $_POST['patientcontact']; 
      $docName=  $_POST['docname']; 
      $appointDate=  $_POST['appointmentdate']; 
      $lastCheckup=  $_POST['lastcheckup']; 

      $error = array();

      if ($patientName == null) {
         $error['patientName'] = "Please Enter Your Name";
      }

      if ($patientEmail == null) {
         $error['patientEmail'] = "Please Enter Email";
      }
      if ($patientContact == null) {
         $error['patientContact'] = "Please Enter Contact Number";
      }

      if ($docName == null) {
         $error['docName'] = "Enter Doctor Name";
      }
      if ($appointDate == null) {
         $error['appointDate'] = "Enter Apppointment Date";
      }

      if ($lastCheckup == null) {
         $error['lastCheckup'] = "Enter Details about last checkup/ type None";
      }






      if (count($error)== 0) {
         $con = mysqli_connect('localhost', 'root', '', 'Health_Care');      //////////
         $query = mysqli_query($con, "insert into Appoint_List(Name,Email,Contact,Doctor_Name,Appointment_Date,Last_Checkup)values('$patientName','$patientEmail','$patientContact', '$docName','$appointDate','$lastCheckup' )");
///////////////////////
         if ($query) {
            echo "Data Inserted Successfully<br> <br>";
         } else {
            echo "Data Insertion Failed <br> <br>  ";
         }
      }
   }
   ?>


   <!-- booking section starts  -->

   <section class="insert-frm">

      <h1 class="heading-title">Let's Take an appointment!</h1>

  
         <form method="post" action="" class="insert-frmm">
            <div class="frm-con">
               <label for="">Patient Name: </label><br>
               <input type="text" name="patientname" placeholder="Enter Patient Name"><br>
               <?php
               if (isset($error['patientName'])) {
                  echo $error['patientName'];
               }
               ?>
               <label for="">Email: </label><br>
               <input type="text" name="patientemail" placeholder="Enter Email"><br>
               <?php
               if (isset($error['patientEmail'])) {
                  echo $error['patientEmail'];
               }
               ?>
               <label for="">Enter Contact: </label><br>
               <input type="text" name="patientcontact" placeholder="+880"><br>
               <?php
               if (isset($error['patientContact'])) {
                  echo $error['patientContact'];
               }
               ?>

<label for="">Doctor Name: </label><br>
               <input type="text" name="docname" placeholder="Doctor Name"><br>
               <?php
               if (isset($error['docName'])) {
                  echo $error['docName'];
               }
               ?>

               
<label for="">Appointment Date: </label><br>
               <input type="date" name="appointmentdate" placeholder="Doctor Name"><br>
               <?php
               if (isset($error['appointDate'])) {
                  echo $error['appointDate'];
               }
               ?>
               <label for="">Last Checkup:</label><br>
               <input type="text" name="lastcheckup" placeholder="doctor name/checkup date"><br>
               <?php
               if (isset($error['lastCheckup'])) {
                  echo $error['lastCheckup'];
               }
               ?>

               <div class="buttoncont">  <input type="submit" name="Submit" value="Submit" class="btn" ><br><br> </div>
              
            </div>
         </form>
      

   </section>

   <!-- booking section ends -->



   <!-- footer section starts  -->

   <section class="footer">

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

      <div class="credit">created by <span>Team Stars </span> | all rights reserved! &copy; 2023 </div>

   </section>

   <!-- footer section ends -->









   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>
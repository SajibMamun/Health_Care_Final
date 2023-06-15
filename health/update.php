<?php
$uid = $_GET['updateid'];
$con = mysqli_connect('localhost', 'root', '', 'Health_Care'); ///////////
$result = mysqli_query($con, "select * from Appoint_List where id='$uid'");//////
$row = mysqli_fetch_assoc($result);





$p_name=  $row['Name'];
$p_email=  $row['Email'];
$p_contact=  $row['Contact'];
$p_docname=  $row['Doctor_Name'];
$p_appdate=  $row['Appointment_Date'];
$p_lastcheckin=  $row['Last_Checkup'];










if (isset($_POST['update'])) {
    $pName = $_POST['patientname'];     //value ashtese lebel theke   //pname level name
    $pEmail = $_POST['patientemail'];
    $pContact = $_POST['patientcontact'];
    $pDocName = $_POST['docname'];
    $pAppointment = $_POST['appointmentdate'];
    $pLastcheck = $_POST['lastcheckup'];
 





    $con = mysqli_connect('localhost', 'root', '', 'Health_Care'); ///////////////
    $query = mysqli_query($con, "update Appoint_List set Name='$pName', Email='$pEmail' , Contact='$pContact' ,  Doctor_Name='$pDocName',  Appointment_Date='$pAppointment',  Last_Checkup='$pLastcheck'            where id='$uid'"); /////////
    if ($query) {
        echo "Update Successfully";
        header('Location: view.php');
    } else {
        echo "Update Failed";
    }
}

?>



<html>

<head>
    <title>Update Data</title>
     
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

   h1{
      margin-top: 40px;
      margin-bottom: 20px;
      color: black;
      font-size: x-large;
      text-align: center;
   }
</style>
</head>

<body>
    <section class="header">

        <a href="home.php" class="logo" style="font-weight: 900;">Health Care</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="doctors.php">Doctors</a>
            <a href="view.php">Admin</a>
            <a href="book.php">Appointment</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>



    <section class="insert-frm">
     
            <form method="post" action="" class="insert-frmm">
                <h1>Update Infornation</h1>
                <div class="frm-con">



                <label for="">Patient Name: </label><br>
               <input type="text" name="patientname" value="<?php echo $p_name;?>"><br>
             

               <label for="">Email: </label><br>
               <input type="text" name="patientemail" value="<?php echo $p_email;?>"><br>
             

               <label for="">Enter Contact: </label><br>
               <input type="text" name="patientcontact" value="<?php echo $p_contact;?>"><br>
              

                <label for="">Doctor Name: </label><br>
               <input type="text" name="docname" value="<?php echo $p_docname;?>"><br>
              

               
<label for="">Appointment Date: </label><br>
               <input type="date" name="appointmentdate" value="<?php echo $p_appdate;?>"><br>
             
               <label for="">Last Checkup:</label><br>
               <input type="text" name="lastcheckup" value="<?php echo $p_lastcheckin;?>"><br>
               



               <div class="buttoncont"> 

                
                 <input type="submit" name="update" value="Update" class="btn"><br>
                
                </div>



                    
                </div>
            </form>
  
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
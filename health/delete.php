<?php
    if(isset($_GET['deleteid']))
    {
        $did=$_GET['deleteid'];
        $con=mysqli_connect('localhost','root','','Health_Care');    /////
        $query=mysqli_query($con,"delete from Appoint_List where id='$did'");    ////
        if($query)
        {
            echo "Data Delete Successfully";
            header('Location: view.php');
        }
    }
?>
<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server, $username, $password, $database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo"";

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_number'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    if(($password==$cpassword)){
        $sql= "INSERT INTO `user`(`Name`, `email`, `password`,`phone_number`) VALUES ('$name','$email','$password','$number')";
        if(mysqli_query($conn,$sql)){
            echo "Records inserted successfully";
        }else{
            echo "ERROR: Could not execute $sql." . mysqli_error($conn);
        }
    }
    else{
        echo "ERROR: Entered passwords don't match.";
    }
}

session_start();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error="Wrong entry";
    }
}

if(isset($_POST['postjob'])){
    $cname=$_POST['cname'];
    $position=$_POST['position'];
    $jdesc = $_POST['jdesc'];
    $skill=$_POST['skill'];
    $ctc=$_POST['ctc'];
    $location=$_POST['location'];

    $sql="INSERT INTO `jobs`(`cname`, `position`, `jdesc`, `skill`, `ctc`, `location`) VALUES ('$cname','$position','$jdesc','$skill','$ctc','$location')";
    if(mysqli_query($conn,$sql)){
        echo "Job Posted";
    }
    else{
        echo "Failed to upload new job. Try again! $sql." . mysqli_error($conn);
    }
}
if(isset($_POST['apply'])){
    $cname = $_POST['name'];
    $desg = $_POST['desg'];
    $qual = $_POST['qual'];
    $year = $_POST['year'];

    $sql = "INSERT INTO `candidates`(`name`, `desg`, `qual`, `year`) VALUES ('$cname','$desg','$qual','$year')";
    mysqli_query($conn,$sql);
}


?>
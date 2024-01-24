
<?php
    include('dbconnection.php');
    if(isset($_POST['next'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mobileno = $_POST['Phone Number'];
        $profile = $_POST['profile'];
        $date = $_POST['date'];
        $height = $_POST['height'];
        $maritalstatus = $_POST['marital_status'];
        $religion = $_POST['religion'];
        $city = $_POST['city'];
        $pincode = $_POST['pincode'];
        $mothertongue = $_POST['mothertongue'];

        $query = mysqli_query($conn, "Insert into user(email,password,mobileno,profilefor,dob,height,`marital status`,religion,city,pincode,`mother tongue`) 
        Values('$email',
        '$password',
        '$mobileno',
        '$profile',
        '$date',
        '$height',
        '$maritalstatus',
        '$religion',
        '$city',
        '$pincode',
        '$mothertongue',
        )");
        if($query){
            echo "<script>alert('Data inserted successfully')</script>";
        }else{
            echo "<script>alert('There is an error')</script>";
        }
        }
?>
<?php 
$name = $_POST['user_name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$workout_program = $_POST['workout_program'];
$time_slot = $_POST['time_slot'];
$membership_period = $_POST['membership_period'];

$connect = mysqli_connect("localhost","root","","membership");

if ($age>=14 && $age<=75) {
    if($phone_number<9999999999 && $phone_number>1000000000){
        $s = "INSERT INTO members_data (id, name, age, gender, phone_number, email, workout_program, time_slot, membership_period) 
        VALUES ('NULL', '$name', '$age', '$gender', '$phone_number', '$email', '$workout_program', '$time_slot', '$membership_period')";
        mysqli_query($connect,$s);
        echo "<script type= 'text/javascript'>
        alert('New record created successfully');
            </script>";
    } else{
        echo "<script type= 'text/javascript'>
        alert('Phone number Invalid');
            </script>";
    }

} else{
    echo "<script type= 'text/javascript'>
    alert('Age is not in the range');
        </script>";
}


?>
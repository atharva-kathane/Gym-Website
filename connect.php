<?php
$user_name = $_POST['user_name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$workout_program = $_POST['workout_program'];
$time_slot = $_POST['time_slot'];
$membership_period = $_POST['membership_period'];

if(!empty($user_name) || !empty($age) || !empty($gender) || !empty($phone_number) || !empty($email) || !empty($workout_program) || !empty($time_slot) || !empty($membership_period)) {
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "membership";

        // create a connection
        $conn =  new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else{
            $SELECT = "SELECT email From details2.0 Where email = ? Limit 1";
            $INSERT = "INSERT Into details2.0 (user_name, age, gender, phone_number, email, workout_program, time_slot, membership_period) values(?, ?, ?, ?, ?, ?, ?, ?)";

            // prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt-> bind_param("s", $email);
            $stmt-> execute();
            $stmt-> bind_result($email);
            $stmt-> store_result();
            $rnum = $stmt-> num_rows;

            if ($rnum ==0){
                $stmt-> close();

                $stmt = $conn->prepare($INSERT);
                $stmt-> bind_param("sisissss", $user_name, $age, $gender, $phone_number, $email, 
                    $workout_program, $time_slot, $membership_period);
                $stmt-> execute();
                echo "New record inserted sucessfully";
            } else {
                echo "Someone has already registered using this email";
            }
            $stmt-> close();
            $conn-> close();
        }

            } else{
                echo "All field are required";
                die();

            }
?>


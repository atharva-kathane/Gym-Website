<?php 
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];


$connect = mysqli_connect("localhost","root","","membership");

if($phone<9999999999 && $phone>1000000000){
    $s = " insert into checkout values ('$name','$phone','$address')";
    mysqli_query($connect,$s);
    echo "<script type= 'text/javascript'>
    alert('New record created successfully');
        </script>";
} else{
    echo "<script type= 'text/javascript'>
    alert('Phone number Invalid');
        </script>";
}

?>
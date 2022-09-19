<div id="webform">
<h2>Web Form</h2>
<form action="" method="post">
<label>Name :</label>
<input type="text" name="name" required placeholder="Please Enter Name"/><br><br>
<label>Student Email :</label>
<input type="email" name="email" required placeholder="qwerty@gmail.com"/><br><br>
<label>Student City :</label>
<input type="text" name="city" required placeholder="Please Enter Your City"/><br><br>
<select name="gender" required>
    <option value=""> Select Gender </option>
    <option value="M"> Male </option>
    <option value="F"> Female </option>
</select>
<br><br>
<input type="submit" value=" Submit Details " name="submit"/><br />
</form>
</div>

<?php
if(isset($_POST["submit"])){
include 'dbconfig.php';

$sql = "INSERT INTO entries (name, email, city, gender)
VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["city"]."','".$_POST["gender"]."')";

if ($conn->query($sql) === TRUE) {
echo "
    <script type= 'text/javascript'>
        alert('New record created successfully');
    </script>";
} 
else 
{
    echo 
    "<script type= 'text/javascript'>
        alert('Error: " . $sql . "<br>" . $conn->error."');
    </script>";
}

$conn->close();
}
?>
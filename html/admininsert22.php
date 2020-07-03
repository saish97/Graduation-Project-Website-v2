<?php
$DoctorsName = filter_input(INPUT_POST, 'DoctorsName');
$Gender = filter_input(INPUT_POST, 'Gender');
$Age = filter_input(INPUT_POST, 'Age');
$Email = filter_input(INPUT_POST, 'Email');
$PhoneNo = filter_input(INPUT_POST, 'PhoneNo');
$Nationality = filter_input(INPUT_POST, 'Nationality');
$Specialist = filter_input(INPUT_POST, 'Specialist');   

if (!empty($DoctorsName)){
if (!empty($Gender)){
if (!empty($Age)){
if (!empty($Email)){
if (!empty($PhoneNo)){
if (!empty($Nationality)){ 
if (!empty($Specialist)){
    
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "graduation_project";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO adminsinserts22 (DoctorsName, Gender, Age, Email, PhoneNo, Nationality, Specialist)
values ('$DoctorsName', '$Gender', '$Age', '$Email', '$PhoneNo', '$Nationality', '$Specialist')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Specialist should not be empty";
die();
}
}
else{
echo "Nationality should not be empty";
die();
}
}
else{
echo "Phone No should not be empty";
die();
}
}
else{
echo "Email should not be empty";
die();
}
}
else{
echo "Age should not be empty";
die();
}
}
else{
echo "Gender should not be empty";
die();
}
}
else{
echo "Doctors Name should not be empty";
die();
}

?>


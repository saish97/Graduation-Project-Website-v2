<?php
$PatientsName = filter_input(INPUT_POST, 'PatientsName');
$Gender = filter_input(INPUT_POST, 'Gender');
$Age = filter_input(INPUT_POST, 'Age');
$Email = filter_input(INPUT_POST, 'Email');
$PhoneNo = filter_input(INPUT_POST, 'PhoneNo');
$MedicinesName =  filter_input(INPUT_POST, 'MedicinesName');
$MorningDoze =  filter_input(INPUT_POST, 'MorningDoze');
$AfternoonDoze =  filter_input(INPUT_POST, 'AfternoonDoze');
$NightDoze =  filter_input(INPUT_POST, 'NightDoze');
$NoOfTimeToTakeMedicines =  filter_input(INPUT_POST, 'NoOfTimeToTakeMedicines');
$StartDate = filter_input(INPUT_POST, 'StartDate');


if (!empty($PatientsName)){
if (!empty($Gender)){
if (!empty($Age)){
if (!empty($Email)){
if (!empty($PhoneNo)){
if (!empty($MedicinesName)){
if (!empty($MorningDoze)){
if (!empty($AfternoonDoze)){
if (!empty($NightDoze)){
if (!empty($NoOfTimeToTakeMedicines)){
if (!empty($StartDate)){

    
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
$sql = "INSERT INTO doctorsinserts (PatientsName, Gender, Age, Email, PhoneNo, MedicinesName, MorningDoze, AfternoonDoze, NightDoze, NoOfTimeToTakeMedicines, StartDate)
values ('$PatientsName', '$Gender', '$Age', '$Email', '$PhoneNo', '$MedicinesName', '$MorningDoze', '$AfternoonDoze', '$NightDoze','$NoOfTimeToTakeMedicines', '$StartDate')";
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
echo "Start Date should not be empty";
die();
}
}
else{
echo "No Of Time To Take Medicines should not be empty";
die();
}
}
else{
echo "Night Doze should not be empty";
die();
}
}
else{
echo "Afternoon Doze should not be empty";
die();
}
}
else{
echo "Morning Doze should not be empty";
die();
}
}
else{
echo "Medicines Name should not be empty";
die();
}
}
else{
echo "Phone No. should not be empty";
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
echo "Patients Name should not be empty";
die();
}
?>


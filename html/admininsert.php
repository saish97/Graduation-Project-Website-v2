<?php
$PatientsName = filter_input(INPUT_POST, 'PatientsName');
$MachineID = filter_input(INPUT_POST, 'MachineID');
$Gender = filter_input(INPUT_POST, 'Gender');
$Age = filter_input(INPUT_POST, 'Age');
$Email = filter_input(INPUT_POST, 'Email');
$PhoneNo = filter_input(INPUT_POST, 'PhoneNo');
$MedicalHistory = filter_input(INPUT_POST, 'MedicalHistory');
$MedicinesTakenPreviously = filter_input(INPUT_POST, 'MedicinesTakenPreviously');
$Date = filter_input(INPUT_POST, 'Date');

if (!empty($PatientsName)){
if (!empty($MachineID)){
if (!empty($Gender)){
if (!empty($Age)){
if (!empty($Email)){
if (!empty($PhoneNo)){
if (!empty($MedicalHistory)){
if (!empty($MedicinesTakenPreviously)){
if (!empty($Date)){
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
$sql = "INSERT INTO adminsinserts (PatientsName, MachineID, Gender, Age, Email, PhoneNo, MedicalHistory, MedicinesTakenPreviously, Date)
values ('$PatientsName', '$MachineID', '$Gender', '$Age', '$Email', '$PhoneNo', '$MedicalHistory', '$MedicinesTakenPreviously', '$Date')";
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
echo "Date should not be empty";
die();
}
}
else{
echo "Medicines Taken Previously should not be empty";
die();
}
}
else{
echo "Medical History should not be empty";
die();
}
}
else{
echo "Phone NO should not be empty";
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
echo "Machine ID should not be empty";
die();
}
}
else{
echo "PatientsName should not be empty";
die();
}
?>


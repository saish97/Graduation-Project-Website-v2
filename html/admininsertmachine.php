<?php
$MachineName = filter_input(INPUT_POST, 'MachineName');
$MachineID = filter_input(INPUT_POST, 'MachineID');
$Email = filter_input(INPUT_POST, 'Email');
$PhoneNo = filter_input(INPUT_POST, 'PhoneNo');
$Date = filter_input(INPUT_POST, 'Date');   

if (!empty($MachineName)){
if (!empty($MachineID)){
if (!empty($Email)){
if (!empty($PhoneNo)){
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
$sql = "INSERT INTO admininsertmachine (MachineName, MachineID, Email, PhoneNo, Date)
values ('$MachineName', '$MachineID', '$Email', '$PhoneNo', '$Date')";
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
echo "Machine ID should not be empty";
die();
}
}
else{
echo "Machine Name should not be empty";
die();
}

?>


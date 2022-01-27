<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pdb_tugas1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "insert into member (nama, email, password) values ('$nama','$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "Alhamdulilah, pendaftaran berhasil !";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
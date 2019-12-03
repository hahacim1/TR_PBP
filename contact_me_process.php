<?php
$conn = mysqli_connect('localhost', 'root', '', 'hansen');
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

$name = $_POST["cm-name"];
$email = $_POST["cm-email"];
$message = $_POST["cm-message"];

$sql = "INSERT INTO contact (name, email, message) VALUES ('".$name."', '".$email."', '".$message."')";

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Could not successfully run query (".$sql.") from DB: " . mysqli_error($conn);
    exit;
} else {
    header("Location: index.html");
}
$conn->close();
?>
?>
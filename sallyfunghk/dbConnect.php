<?php
date_default_timezone_set('Etc/GMT-8');

$dbConnection = new mysqli('localhost', 'u954702103_sallyfung', 'Passw0rdd', 'u954702103_contact');
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';
$time = date('Y/m/d H:i:s');

$sql = "INSERT INTO `contact` (`id`, `name`, `email`, `message`, `time`) 
    VALUES (NULL, '$name', '$email', '$message', '$time')";
if ($dbConnection->query($sql) === TRUE) {
    echo "Submit success!";
}
else 
{
    echo "failed";
}
?>
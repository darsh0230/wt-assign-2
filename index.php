<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>

    <style>
        body {
            align-items: center;
            background-color: #000;
            justify-content: center;
            height: 100vh;
            padding:100px;
            font-family: sans-serif;
        }
        h1{
            color:#eee;
        }

        .container {
        background-color: #15172b;
        border-radius: 20px;
        box-sizing: border-box;
        padding: 20px;
        width:600px;
        }

        .submit {
        background-color: #08d;
        border-radius: 12px;
        border: 0;
        box-sizing: border-box;
        color: #eee;
        cursor: pointer;
        font-size: 18px;
        height: 50px;
        margin-top: 38px;
        // outline: 0;
        text-align: center;
        width: 100%;
        }

        .submit:active {
        background-color: #06b;
        }

    </style>

</head>

<body>

<center> 
    <div class="container">
        <h1>Choose Portal</h1>
        <button class="submit" onclick="document.location.href='studentDashboard.php';">Student</button>
        <button class="submit" onclick="document.location.href='login.php';">Teacher</button>
    </div>
</center>

    
</body>
</html>
<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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

        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #999;
        text-align: left;
        padding: 8px;
        color:#eeeeee
        }

        tr:nth-child(even) {
        background-color: #303245;
        }

        .container {
        background-color: #15172b;
        border-radius: 20px;
        box-sizing: border-box;
        padding: 20px;
        }


    </style>

    <script>
        function insertRow(Class, Date, Feedback){
        fbTable=document.getElementById("feedback-table");

        let row = fbTable.insertRow(1); // We are adding at the end

        // Create table cells
        let c1 = row.insertCell(0);
        let c2 = row.insertCell(1);
        let c3 = row.insertCell(2);
    
        // Add data to c1 and c2
        c1.innerText = Class
        c2.innerText = Date
        c3.innerText = Feedback

        }
    </script>

    </head>
    <body>

    <div class="container">
        <h1>Feedback Results</h1>

        <table id="feedback-table">
        <colgroup>
            <col span="1" style="width: 15%;">
            <col span="1" style="width: 15%;">
            <col span="1" style="width: 70%;">
        </colgroup>

            <tr>
                <th>Class</th>
                <th>Date</th>
                <th>Feedback</th>
            </tr>
            
        </table>    
    </div>
    <?php
        $con = mysqli_connect("localhost", "root", "", "feedback");
        if(!$con){
            die("Could not connect: " . mysql_error());
        }

        $result = mysqli_query($con, "SELECT * FROM forms WHERE TeacherId='$_POST[teachId]' AND Section='$_POST[sect]'");

        if(!$result){
            echo "There is no records";
        }

        while($row = mysqli_fetch_array($result)){
            echo "<script>insertRow('$row[Section]', '$row[Date]', '$row[Feedback]');</script>";
        }

        mysqli_close($con);
    ?>
        
    </body>
</html>
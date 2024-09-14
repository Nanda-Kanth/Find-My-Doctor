<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Details</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 500px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            margin: 0;
            font-size: 24px;
        }
        button{
            border-radius:7.5px;
            border:0px;
            padding:7px;
            background-color:blue;
            color:white;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Appointment Details</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $doctorName = isset($_POST['doctor_name']) ? $_POST['doctor_name'] : "";
            $hospitalName = isset($_POST['hospital_name']) ? $_POST['hospital_name'] : "";
            $patientName = isset($_POST['patient_name']) ? $_POST['patient_name'] : "";
            $patientAge = isset($_POST['patient_age']) ? $_POST['patient_age'] : "";
            $dateOfConsideration = isset($_POST['date_of_consideration']) ? $_POST['date_of_consideration'] : "";

            echo "<p><strong>Doctor Name:</strong> $doctorName</p>";
            echo "<p><strong>Hospital Name:</strong> $hospitalName</p>";
            echo "<p><strong>Patient Name:</strong> $patientName</p>";
            echo "<p><strong>Patient Age:</strong> $patientAge</p>";
            echo "<p><strong>Date of Consideration:</strong> $dateOfConsideration</p>";
        } else {
            echo "<p>No data available.</p>";
        }
        ?>
        <a href="page1.html"><button>Home</button></a>
    </div>
</body>
</html>

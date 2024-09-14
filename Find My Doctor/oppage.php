<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Appointment Booking</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px; /* Add padding for better spacing */
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
            width: 500px; /* Increase width */
            margin: 0 auto; /* Center the container */
        }

        h2 {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            margin: 0;
            font-size: 24px;
        }

        form {
            padding: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            appearance: none;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 12px 24px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #0056b3;
        }

        #cardNumberField {
            display: none;
        }

        /* Add background image */
        body {
            background: url('your-background-image.jpg') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Book an Appointment</h2>

        <?php
        // Set default values or retrieve data from a database
        $doctorName = "Dr. John Doe";
        $hospitalName = "City Hospital";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Handle form submission here
            $doctorName = $_POST['doctor_name'];
            $hospitalName = $_POST['hospital_name'];

            // Process or save the form data as needed
            echo "<h2 style='background-color: green; color: #fff; padding: 20px; margin: 10px; font-size: 24px;'>" . $doctorName . "</h2>";
            echo "<h3 style='padding: 20px; margin: 0; font-size: 20px;'>" . $hospitalName . "</h3>";
        }
        ?>

        <form id="appointmentForm" method="post" action="bookedphp.php">
            <label for="patientName">Patient Name</label>
            <input type="text" id="patientName" name="patient_name" required>

            <label for="patientAge">Patient Age</label>
            <input type="number" id="patientAge" name="patient_age" required>

            <label for="dateOfConsideration">Date of Consideration</label>
            <input type="date" id="dateOfConsideration" name="date_of_consideration" required>

            <label for="timeSlot">Time Slot</label>
            <select id="timeSlot" name="time_slot" required>
                <option value="morning">Morning</option>
                <option value="afternoon">Afternoon</option>
                <option value="evening">Evening</option>
            </select>

            <label for="paymentMethod">Payment Method</label>
            <select id="paymentMethod" name="payment_method" required>
               <option value="cash">select payment type</option>
                <option value="creditCard">Credit Card</option>
                <option value="debitCard">Debit Card</option>
            </select>

            <div id="cardNumberField">
                <label for="cardNumber">Card Number</label>
                <input type="text" id="cardNumber" name="card_number" maxlength="16" minlength="16" style="width:75%;">
                <label for="cardExp">Card Expiry</label>
                <input type="text" id="cardExp" name="card_expiry" minlength="5" maxlength="5" required style="width:65px;">
                <label for="cardCvv">CVV</label>
                <input type="text" id="cardCvv" name="card_cvv" minlength="3" maxlength="3" required style="width:50px;">
            </div>


            <input type="hidden" name="doctor_name" value="<?php echo htmlspecialchars($doctorName); ?>">
            <input type="hidden" name="hospital_name" value="<?php echo htmlspecialchars($hospitalName); ?>">

            <button type="submit">Book Appointment</button>
        </form>
    </div>

    <script>
        // Your existing JavaScript code
const paymentMethodSelect = document.getElementById('paymentMethod');
        const cardNumberField = document.getElementById('cardNumberField');
        const cardNumberInput = document.getElementById('cardNumber');
        const cardExpiry=document.getElementById('cardExp');
        const cardCvnum=document.getElementById('cardCvv');

        paymentMethodSelect.addEventListener('change', () => {
            if (paymentMethodSelect.value === 'creditCard' || paymentMethodSelect.value === 'debitCard') {
                cardNumberField.style.display = 'block';
                cardNumberInput.setAttribute('required', 'true');
                cardExpiry.setAttribute('required', 'true');
                cardCvnum.setAttribute('required', 'true');
            } else {
                cardNumberField.style.display = 'none';
                cardNumberInput.removeAttribute('required');
                cardExpiry.removeAttribute('required');
                cardCvnum   .removeAttribute('required');
            }
        });

        // JavaScript code for handling form submission
        //document.getElementById("appointmentForm").addEventListener("submit", function(event) {
          //  event.preventDefault();
            
            // You can add code here to send the form data to the server for processing and database storage.
            // You'll need a server-side script (e.g., PHP, Node.js) to handle the form submission.
            // This example is just for the front-end.
            
            //alert("Appointment booked successfully!");
            // You can also redirect to a confirmation page or do any other necessary processing.
        //});

    </script>
</body>
</html>

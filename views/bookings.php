<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Modal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<button id="openModal">Book Now</button>

<div id="bookingModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <h2>Booking Form</h2>
        <form id="bookingForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
            
            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
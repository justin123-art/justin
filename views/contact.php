<?php
include 'nav/header.php';
?>

<style>
    #contact {
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #contact h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    #contact .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    #contact .col-md-6 {
        flex-basis: 45%;
        margin: 20px;
    }

    #contact form {
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    #contact form .form-group {
        margin-bottom: 20px;
    }

    #contact form label {
        display: block;
        margin-bottom: 10px;
    }

    #contact form input, #contact form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    #contact form button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #contact form button[type="submit"]:hover {
        background-color: #3e8e41;
    }

    #contact table {
        width: 100%;
        border-collapse: collapse;
    }

    #contact th, #contact td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    #contact th {
        background-color: #f0f0f0;
    }
</style>

<div id="contact" class="w3-container w3-display-container city" style="display:block">
    <h2>Contact Us</h2>
    
    <div class="row">
        <div class="col-md-6">
            <h3>Get in Touch</h3>
            <form action="../page/admin.php?function=contactUs&&sub_page=contactUs" method="POST">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" required></textarea>
                </div>
                <button class="btn btn-primary" type="submit">
                    Send Message
                </button>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Contact Information</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($contactInfo as $info) { ?>
                        <tr>
                            <td><?= $info['cont_name'] ?></td>
                            <td><?= $info['cont_email'] ?></td>
                            <td><?= $info['cont_number'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .forms {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 0 15px; 
        }

        .wrapper {
            width: 100%;
            max-width: 400px; /* Adjusted width */
            background: rgba(255, 255, 255, 0.8);
            border: 2px solid transparent;
            backdrop-filter: blur(10px);
            color: #131111;
            border-radius: 12px;
            padding: 40px 25px; /* Reduced padding */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .input-box {
            position: relative;
            width: 100%;
            margin: 15px 0; /* Reduced margin */
        }

        .input-box input {
            width: 100%;
            height: 50px; /* Reduced height */
            background: transparent;
            border: 2px solid green;
            border-radius: 40px;
            font-size: 0.9rem; /* Slightly smaller font */
            color: #131111;
            padding: 0 20px 0 50px; /* Adjusted padding */
        }

        .input-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: orange;
        }

        /* Rest of your existing CSS remains the same */

        @media (max-width: 576px) {
            .wrapper {
                max-width: 100%; /* Full width on small screens */
                padding: 30px 20px;
            }

            .input-box input {
                height: 45px;
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body>
    <section id="forms" class="forms section-padding">
        <div class="wrapper">
            <form action="../page/authentication.php?function=login&&sub_page=login" method="POST">
                <h1>LOG IN</h1>
                <label style="color:red;"><?= !empty($msg)? $msg:'' ?></label>
                <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" placeholder="Email" required aria-label="Email">
                </div>
                <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Password" required aria-label="Password">
                </div>
                <button type="submit" class="low">Log In</button>
                <div class="register-link">
                    <p>Don't have an account? <a href="authentication.php?sub_page=register">Register</a></p>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
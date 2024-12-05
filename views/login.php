<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .forms {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0 15px;
        }

        .wrapper {
            width: 100%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            padding: 40px 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .wrapper h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2rem;
        }

        .input-box {
            position: relative;
            margin-bottom: 20px;
        }

        .input-box input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: 2px solid #4CAF50;
            border-radius: 40px;
            padding: 0 45px 0 20px;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        .input-box input:focus {
            border-color: #45a049;
            box-shadow: 0 0 10px rgba(76, 175, 80, 0.2);
        }

        .input-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #4CAF50;
            font-size: 1.1rem;
        }

        .input-box input::placeholder {
            color: #999;
        }

        .low {
            width: 100%;
            height: 45px;
            background: #4CAF50;
            border: none;
            border-radius: 40px;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .low:hover {
            background: #45a049;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
        }

        .register-link a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .wrapper {
                max-width: 95%;
                padding: 30px 20px;
            }

            .wrapper h1 {
                font-size: 1.8rem;
            }

            .input-box input {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <section id="forms" class="forms">
        <div class="wrapper">
            <form action="../page/authentication.php?function=login&sub_page=login" method="POST">
                <h1>LOG IN</h1>
                
                <?php if (!empty($msg)): ?>
                    <div style="color: red; text-align: center; margin-bottom: 15px;">
                        <?= $msg ?>
                    </div>
                <?php endif; ?>

                <div class="input-box">
                    <i class="fas fa-envelope"></i>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="Email" 
                        required 
                        aria-label="Email"
                    >
                </div>

                <div class="input-box">
                    <i class="fas fa-lock"></i>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="Password" 
                        required 
                        aria-label="Password"
                    >
                </div>

                <button type="submit" class="low">Log In</button>

                <div class="register-link">
                    <p>Don't have an account? 
                        <a href="../page/authentication.php?sub_page=register">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
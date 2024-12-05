<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Hugo 0.84.0">
		<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
	
		
	
		<!-- Bootstrap core CSS -->
		<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
	
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
                    max-width: 520px;
                    background: rgba(255, 255, 255, 0.8);
                    border: 2px ;
                    backdrop-filter: blur(10px);
                    color: #131111;
                    border-radius: 12px;
                    padding: 50px 30px; 
                    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);

                }
                .wrapper h1 {
                    font-size: 2.5rem; 
                    text-align: center;
                    margin-bottom: 30px; 
                }
                .logo {
                    display: block;
                    margin-left:  20px; 
                    width: 100px; 
                    height: auto; 
                }
                .input-box {
                    position: relative;
                    width: 90%;
                    height: 50px;
                    margin: 20px 0; 
                }
                .input-box input {
                    width: 70%;
                    height: 50%;
                    background: transparent;
                    border: 2px solid green;
                    border-radius: 40px;
                    font-size: 1rem; 
                    color: #131111;
                    padding: 20px 45px 20px 60px; 
                }
                .input-box i {
                    position: absolute;
                    left: 20px;
                    top: 50%;
                    transform: translateY(-50%);
                    color: orange;
                }
                .input-box input::placeholder {
                    color: #e6c2c2;
                }
                .wrapper .remember-forgot {
                    display: flex;
                    justify-content: space-between;
                    font-size: 0.9rem; 
                    margin: -15px 0 15px;
                }
                .remember-forgot a {
                    color: #000;
                    text-decoration: none;
                }
                .remember-forgot a:hover {
                    text-decoration: underline;
                }
                .wrapper .low {
                    width: 100%;
                    height: 45px;
                    background:green;
                    border: none;
                    outline: none;
                    border-radius: 40px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
                    cursor: pointer;
                    font-size: 1rem; 
                    color: #fff;
                    font-weight: 600;
                }
                .register-link {
                    font-size: 0.9rem; 
                    text-align: center;
                    margin: 20px 0 15px;
                }
                .register-link p a {
                    color: #0e0d0d;
                    text-decoration: none;
                    font-weight: 600;
                }
                .register-link p a:hover {
                    text-decoration: underline;
                }

                /* Footer Start */
                #footer {
                    padding: 15px 11%;
                }
                #footer .f-content {
                    text-align: center;
                }
                .f-logo img {
                    width: 250px;
                    cursor: pointer;
                }
                .f-content i {
                    font-size: 18px;
                    color: black;
                    padding: 10px;
                    transition: 0.5s;
                    cursor: pointer;
                }
                .f-content i:hover {
                    background: #e53937;
                    color: white;
                    border-radius: 5px;
                }   
                /* Footer End */
                
                @media (max-width: 576px) {
                    .wrapper h1 {
                    font-size: 2rem; 
                    }
                    .input-box input {
                    font-size: 0.9rem; 
                    }
                    .wrapper .low {
                    font-size: 0.9rem;
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
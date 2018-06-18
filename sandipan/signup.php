<!DOCTYPE html>
<html lang="en">
<head>
    <title>YRC_VIT | Sign up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form class="login100-form validate-form flex-sb flex-w" action="http://localhost/YRC_Backend/sadaka/HTML/Login/signup1.php" method="post">
                    <span class="login100-form-title p-b-32">
                        Sign up
                    </span>

                    <span class="txt1 p-b-11">
                        Name
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Name is required">
                        <input class="input100" type="text" name="name" required>
                        <span class="focus-input100"></span>
                    </div>
                    <span class="txt1 p-b-11">
                        Registration number
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Name is required">
                        <input class="input100" type="text" name="reg_no" required>
                        <span class="focus-input100"></span>
                    </div>
                    <span class="txt1 p-b-11">
                        Contact No.
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Contact number is required">
                        <input class="input100" type="text" name="contact" required>
                        <span class="focus-input100"></span>
                    </div>
                    <span class="txt1 p-b-11">
                        E-Mail ID
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Email-ID is required">
                        <input class="input100" type="email" name="email" required>
                        <span class="focus-input100"></span>
                    </div>
                    <span class="txt1 p-b-11">
                        Date of birth
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Date of birth is required">
                        <input class="input100" type="date" name="dob" required>
                        <span class="focus-input100"></span>
                    </div>
                    <span class="txt1 p-b-11">
                        Blood group
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Blood group is required">
                        <select name="blood_grp" required>
                             <option value="">--Select--</option>
                             <option value="O+">O+ve </option>
                             <option value="O-">O-ve </option>
                             <option value="A+">A+ve </option>
                             <option value="A-">A-ve</option>
                             <option value="B+">B+ve</option>
                             <option value="B-">B-ve</option>
                             <option value="AB-">AB-ve</option>
                             <option value="AB-">AB+ve</option>
                    </select>
                        <span class="focus-input100"></span>
                    </div>
                    <div class="flex-sb-m w-full p-b-48">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" required>
                            <label class="label-checkbox100" for="ckb1">
                                I agree to receive notifications in case of urgent requirements.
                            </label>
                        </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Sign up
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>
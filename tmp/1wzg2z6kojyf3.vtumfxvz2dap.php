
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
        <div class="wrap-login100">
            <form class="login100-form validate-form"  action="#" method="post">

<!--                <span class="login100-form-title p-b-26">-->
<!--						Welcome-->
<!--					</span>-->
                <span class="login100-form-title p-b-48">
						<i class="pointer-event">Planner</i>
					</span>
                <?php if ($errors['city']): ?>
                    <span class="err"><?= ($errors['city']) ?></span>
                <?php endif; ?><br>
                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="city"placeholder="City" value="<?= ($city) ?>"/>
                </div>


                <?php if ($errors['places']): ?>
                    <span class="err"><?= ($errors['places']) ?></span>
                <?php endif; ?><br>
                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="places" placeholder="Activities(bars,cafes)"value="<?= ($places) ?>"/>
                </div>

                <?php if ($errors['distance']): ?>
                    <span class="err"><?= ($errors['distance']) ?></span>
                <?php endif; ?><br>
                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="int" name="distance" placeholder="Distance: 5 (miles)"value="<?= ($distance) ?>"/>
                </div>

                <div class="container-login100-form-bgbtn">
                    <div class="login100-form-btn"><input class="login100-form-btn" type="submit" name="submit"/>
                    </div>
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
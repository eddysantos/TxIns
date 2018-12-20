<?php
date_default_timezone_set('America/Monterrey');
session_start();

// require '/Resources/php/startup_script.php';

function detectDevice(){
	$userAgent = $_SERVER["HTTP_USER_AGENT"];
	$devicesTypes = array(
        "computer" => array("msie 10", "msie 9", "msie 8", "windows.*firefox", "windows.*chrome", "x11.*chrome", "x11.*firefox", "macintosh.*chrome", "macintosh.*firefox", "opera"),
        "tablet"   => array("tablet", "android", "ipad", "tablet.*firefox"),
        "mobile"   => array("mobile ", "android.*mobile", "iphone", "ipod", "opera mobi", "opera mini"),
        "bot"      => array("googlebot", "mediapartners-google", "adsbot-google", "duckduckbot", "msnbot", "bingbot", "ask", "facebook", "yahoo", "addthis")
    );
 	foreach($devicesTypes as $deviceType => $devices) {
        foreach($devices as $device) {
            if(preg_match("/" . $device . "/i", $userAgent)) {
                $deviceName = $deviceType;
            }
        }
    }
    return ucfirst($deviceName);
 	}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/Resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/desktop/Resources/css/main.css">
  </head>
  <body>
		<div class="container-fluid login-box">
			<div class="alert alert-danger" style="display: none">
				Incorrect username or password!
			</div>
			<div class="login-wrapper">
				<div class="login-header">
					<img src="/Resources/images/logo.png" style="height: 150px" alt="Texas Insurance">
				</div>
				<div class="login-info">
					<form class="form-group p-5" method="post">
						<input type="text" class="form-control login-input" name="userName" placeholder="Username" value="">
						<input type="password" class="form-control login-input mt-3" name="password" placeholder="Password" value="">
						<input type="hidden" name="" value="">
						<br>
						<div class="clearfix">
							<input type="submit" class="btn btn-outline-primary float-right" name="login" id="login" value="Login">
							<a href="#" class="text-secondary">Forgot password?</a>
						</div>
					</form>
				</div>
			</div>
		</div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
		<script src="Resources/JQuery/jquery-3.2.1.min.js" charset="utf-8"></script>
    <!--script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script-->
    <script src="/Resources/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

<?php

require_once __DIR__ . '/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

    $name    = trim($_POST['name'] ?? '');
    $occ     = trim($_POST['occupation'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $age     = trim($_POST['age'] ?? '');
    $mob     = trim($_POST['mobile'] ?? '');
    $adhr    = trim($_POST['aadharNo'] ?? '');
    $ad1     = trim($_POST['addr1'] ?? '');
    $ad2     = trim($_POST['addr2'] ?? '');
    $country = trim($_POST['country'] ?? '');
    $city    = trim($_POST['city'] ?? '');
    $state   = trim($_POST['state'] ?? '');
    $zip     = trim($_POST['pin'] ?? '');
    $other   = trim($_POST['other'] ?? '');
    $emptyValue = '';
    $pass    = $_POST['pass'] ?? '';

    $sql = "INSERT INTO registered_users
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    try {
        $stmt = $conn->prepare($sql);

        $stmt->bind_param(
            "sssssssssssssss",
            $name,
            $email,
            $mob,
            $ad1,
            $country,
            $occ,
            $age,
            $adhr,
            $ad2,
            $state,
            $city,
            $zip,
            $other,
            $emptyValue,
            $pass
        );

        $stmt->execute();
        $stmt->close();

        header('Location: ECOPS2.php');
        exit;

    } catch (mysqli_sql_exception $e) {
        error_log('ECOPS registration failed: ' . $e->getMessage());

        http_response_code(500);
        echo 'Registration failed. Please try again.';
    }
}
?>
<!DOCTYPE html>
<html>
<html>
<title>Registration Form</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Sales Inquiry Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="./Sales Inquiry Form Responsive Widget Template_ Home __ W3layouts_files/style.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="./Sales Inquiry Form Responsive Widget Template_ Home __ W3layouts_files/css" rel="stylesheet">
</head>
<body style="background-image:url('images/back.jpg')";>
	<!--header-->
	<div class="agile-header">
	</div>
	<!--//header-->
	<!---728x90--->
<!--main-->
	<div class="agileits-main">
		<div class="wrap" style=background:purple;opacity: 0.8;>
		<img src="images/reg2.jpg" height="100px" width="100%">
		<form method="post" style="height:70%";>
		   
			<ul>
				<li class="text" >name  : </li>
				<li style="text-color:black";><input name="name" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">occupation:  </li>
				<li><input name="occupation" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">E-mail  :  </li>
				<li><input name="email" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">Password  </li>
				<li><input name="pass" type= "text"></textarea></li>
			</ul>
			<ul>
				<li class="text">Age :  </li>
				<li><input name="age" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">mobile no  :  </li>
				<li><input name="mobile" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">Aadhar No :  </li>
				<li><input name="aadharNo" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">address 1  :  </li>
				<li><input name="addr1" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">address 2  :  </li>
				<li><input name="addr2" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">country  :  </li>
				<li><input name="country" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">state  :  </li>
				<li><input name="state" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">city  :  </li>
				<li><input name="city" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">zip/pin code  :  </li>
				<li><input name="pin" type="text" required=""></li>
			</ul>
			<ul>
				<li class="text">Other Personal information  </li>
				<li><textarea name="other"></textarea></li>
			</ul>
			
			<div class="clear"></div>
			<div class="agile-submit">
				<input type="submit" value="submit" name="submit" target="ECOPS2.php">
				<input type="reset" value="reset" name="reset">
			</div>
			</form>
		</div>	
	</div>
<!--//main-->
<!---728x90--->
<!--footer-->
<div class="footer-w3">
</div>
</body>
</html>

<!---728x90--->

</body></html>
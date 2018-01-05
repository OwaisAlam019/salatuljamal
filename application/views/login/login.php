<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Daily UI - Day 1 Sign In</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="../../../../beauty-spot/assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">BEAUTYSPOT<br><span>ADMIN</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2 style="color:white">Log In</h2>
			</div>
			<form  class=" m-ajax-form" action="<?=base_url()?>admin/login" method="post">
            <label for="username" >Username</label>
			<br/>
			<input type="text" name="username" id="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="password" id="password">
			<br/>
			<button type="submit">Sign In</button>
			<br/>
            </form>
            <p class="alert alert-warning" style="color:red">
                <?php
    if($login=='false')
    { 
    echo ('wrong id or password!.)');
    }
    ?>
            </p>
			<a href="#"><p class="small">Forgot your password?</p></a>
		</div>
	</div>
    <div style="height:100px"></div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>
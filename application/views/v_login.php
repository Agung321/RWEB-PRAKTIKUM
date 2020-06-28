<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<div class="wrapper fadeInDown">
	  <div id="formContent">
	    <!-- Tabs Titles -->

	    <!-- Icon -->
	    <div class="fadeIn first">
	      <img src="<?php echo base_url('assets/img/user.png') ?>" id="icon" alt="User Icon" />
	    </div>
	    	<?php echo validation_errors(); ?>
			<?php echo $this->session->flashdata('pesan_flash'); ?>
	    <!-- Login Form -->
	    <form method="POST" action="<?php echo site_url('login/aksi')?>">
	      <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email">
	      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
	      <input type="submit" class="fadeIn fourth" value="Log In">
	    </form>

	    <!-- Remind Passowrd -->
	    <div id="formFooter">
	      <a class="underlineHover" href="register.php">Do not have an account? Register Now</a>
	    </div>

	  </div>
	</div>

</body>
</html>

<link href="<?php echo base_url('assets/css/style2.css') ?>"rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
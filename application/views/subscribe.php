<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CodeIgniter-EMAIL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Webmail for CodeIgniter" />
	<meta name="keywords" content="CI email, webmail, responsive" />
	<meta name="author" content="webetron" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url(); ?>js/modernizr-2.6.2.min.js"></script>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>We Are Coming Very Soon!</h1>
							<div class="simply-countdown simply-countdown-one"></div>
							<div class="row">
								<h2>
								 <?php

if (isset($deliver_message) && $deliver_message !== '') {

	echo $deliver_message;

} else {

	echo "Notify me when it's ready";
}

?>
								</h2>

								<?php $attributes = array('class' => 'form-inline', 'id' => 'fh5co-header-subscribe');?>
                            	<?php echo form_open('subscribe/register_email', $attributes); ?>
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="email" name="email" class="form-control" id="email" placeholder="Get notify by email" required>
											<button type="submit" class="btn btn-primary">Send</button>
											<p style="color: red;"><?php echo validation_errors(); ?></p>
										</div>
									</div>
								<?php form_close();?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	</div>

	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url(); ?>js/jquery.waypoints.min.js"></script>

	<!-- Stellar -->
	<script src="<?php echo base_url(); ?>js/jquery.stellar.min.js"></script>

	<!-- Count Down -->
	<script src="<?php echo base_url(); ?>js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url(); ?>js/main.js"></script>

	<script>

	    var d = new Date(new Date().getTime() + 800 * 120 * 120 * 2000);

	    // default example
	    simplyCountdown('.simply-countdown-one', {
	        year: d.getFullYear(),
	        month: d.getMonth() + 1,
	        day: d.getDate()
	    });

	    //jQuery example
	    $('#simply-countdown-losange').simplyCountdown({
	        year: d.getFullYear(),
	        month: d.getMonth() + 1,
	        day: d.getDate(),
	        enableUtc: false
	    });

	</script>

	</body>
</html>

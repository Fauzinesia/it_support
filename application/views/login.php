<!DOCTYPE html>
<html>
<head>
	<title>Helpdesk Ticketing LBE</title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url() ?>assets/css/sb-admin-2.css" rel="stylesheet">

	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/LogoIT.png">

	<!-- Related styles of various icon packs and plugins -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/plugins.css">

	<!-- Modernizr (browser feature detection library) -->
	<script src="<?php echo base_url() ?>assets/js/vendor/modernizr-3.3.1.min.js"></script>

	<!-- Additional custom styles for the dark pastel theme -->
	<style>
		body {
			background: linear-gradient(135deg, #4b5563, #9ca3af); /* Dark pastel gradient */
			color: #e0e7ff; /* Light pastel text for contrast */
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 80vh; /* Ensures full viewport height */
			margin: 0;
		}

		.card {
			background-color: #2d3748; /* Darker pastel shade for the card */
			border: none;
			border-radius: 12px;
		}

		.card-body {
			color: #e2e8f0; /* Light pastel text */
		}

		h1.h2 {
			color: #06615F; /* Accent pastel color for brand name */
		}

		.form-control {
			background-color: #4b5563;
			border: 1px solid #6b7280;
			color: #e0e7ff;
		}

		.form-control::placeholder {
			color: #9ca3af; /* Muted pastel for placeholders */
		}

		.form-control:focus {
			background-color: #374151;
			color: #e0e7ff;
			border-color: #06615F; /* Accent border on focus */
			box-shadow: none;
		}

		.btn-primary {
			background-color: #4b5563; /* Dark pastel button */
			border-color: #4b5563;
			color: #07977E; /* Pastel text color */
		}

		.btn-primary:hover {
			background-color: #374151;
			border-color: #4b5563;
		}

		.alert {
			background-color: #f87171;
			color: #ffffff;
			border-radius: 6px;
			border: none;
		}

		.alert .close {
			color: #ffffff;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="card o-hidden shadow-lg" style="margin: auto; margin-top: 15%">
					<div class="card-body p-0">
						<div class="row">
							<div class="col-lg">
								<div class="p-5">
									<div class="text-center">
										<img src="<?php echo base_url() ?>assets/img/LogoIT.png" style="width: 100; height: 110px"><br>
										<h1 class="h2 text-center" style="margin-top: 10px;"><b>Tix-IT</b></h1><br>

										<?php if($this->session->flashdata('status')) : ?>
											<div class="alert alert-danger alert-dismissable">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
												<strong>Failed!</strong> Username or Password are <?php echo $this->session->flashdata('status');?>
											</div>
										<?php endif;?>

										<?php if($this->session->flashdata('status1')) : ?>
											<div class="alert alert-info alert-dismissable">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
												Your session is <strong><?php echo $this->session->flashdata('status1');?></strong>! Please login first!
											</div>
										<?php endif;?>

										<form action="<?php echo site_url('Login/loginProses') ?>" method="post">
											<div class="form-group">
												<input type="text" name="username" class="form-control" placeholder="Enter your ID number" maxlength="7" autofocus>
												<?php echo form_error('username'); ?>
											</div>

											<div class="form-group">
												<input type="password" name="password" class="form-control" placeholder="Enter your password">
												<?php echo form_error('password'); ?>
											</div>

											<button type="submit" class="btn btn-primary btn-user btn-block">LOGIN</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

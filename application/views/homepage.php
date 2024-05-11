<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">

	</head>
	<body class="img js-fullheight" style="background-color:black">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">เข้าสู่ระบบ</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Log-Project</h3>
						<?php echo form_open('Signin/loginUser'); ?>
							<div class="form-group">
								<input type="email" name="email" class="form-control" value="<?php echo set_value('email')?>" placeholder="ที่อยู่อีเมมล์" required>
							</div>
							<div class="form-group">
								<input id="password-field" name="password" type="password" value="<?php echo set_value('password')?>" class="form-control" placeholder="รหัสผ่าน" required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">เข้าสู่ระบบ</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">จดจำรหัสผ่าน
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">ลืมรหัสผ่าน</a>
								</div>
							</div>
	          			<?php echo form_close(); ?>
	          			
		      		</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('public/js/popper.js'); ?>"></script>
	<script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('public/js/main.js'); ?>"></script>

	</body>
</html>


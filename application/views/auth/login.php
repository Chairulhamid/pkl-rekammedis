<img class="wave" src="<?= base_url('assets/'); ?>img/wave.png">
<div class="containers">
	<div class="img">
		<img src="<?= base_url('assets/'); ?>img/pusk.png" alt="logo">
	</div>
	<div class="login-content">
		<form class="user" method="post" action="<?= base_url('auth'); ?>">
			<img src="<?= base_url('assets/'); ?>img/doctor.svg" alt="png">
			<h2 class="title">Selamat Datang</h2>
			<?= $this->session->flashdata('message'); ?>
			<div class="input-div one">
				<div class="i">
					<i class="fas fa-user"></i>
				</div>
				<div class="div">
					<h5>Email</h5>
					<input type="text" class="input" id="email" name="email" autocomplete="disable">
				</div>
			</div>
			<?= form_error('email', '<small class="text-danger m-n2">', '</small>'); ?>
			<div class="input-div pass">
				<div class="i">
					<i class="fas fa-lock"></i>
				</div>
				<div class="div">
					<h5>Password</h5>
					<input type="password" class="input" id="password" name="password">
				</div>
			</div>
			<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
			<input type="submit" class="btn" value="Login">
		</form>
	</div>
</div>
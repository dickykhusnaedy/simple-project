<?= $this->extend('auth/layout/index') ?>

<?= $this->section('content') ?>

<section class="section">
	<div class="container container-register">
		<div class="login-brand pt-3">
			<img src="<?= base_url('template/assets') ?>/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
		</div>
		<div class="card card-primary">
			<div class="card-header">
				<h4>Register</h4>
			</div>
			<div class="card-body">
				<form method="POST" action="<?= base_url('auth/login/check') ?>" class="needs-validation" novalidate="">
					<div class="row">
						<div class="form-group col-lg-6">
							<label for="first_name">First Name</label>
							<input id="first_name" type="text" class="form-control" name="first_name" tabindex="1" placeholder="Jhon" required autofocus>
						</div>
						<div class="form-group col-lg-6">
							<label for="last_name">Last Name</label>
							<input id="last_name" type="text" class="form-control" name="last_name" tabindex="2" placeholder="Kanedy">
						</div>
						<div class="form-group col-lg-12">
							<label for="email">Email</label>
							<input id="email" type="email" class="form-control" name="email" tabindex="1" placeholder="jhon@email.com" required autofocus>
							<div class="invalid-feedback">
								Please fill in your email
							</div>
						</div>
						<div class="form-group col-lg-6">
							<label for="password" class="control-label">Password</label>
							<input id="password" type="password" class="form-control" name="password" tabindex="2" placeholder="••••••••" required>
						</div>
						<div class="form-group col-lg-6">
							<label for="password" class="control-label">Repeat Password</label>
							<input id="password" type="password" class="form-control" name="password" tabindex="2" placeholder="••••••••" required>
						</div>
						<div class="form-group col-lg-12">
							<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
								Login
							</button>
						</div>
					</div>
				</form>
				<div class="text-muted text-center text-small">
					Have an account? <a href="<?= base_url('/') ?>">Login</a>
				</div>
			</div>
		</div>
		<div class="simple-footer">
			&copy; <?= date('Y') ?> Simple Project
		</div>
	</div>
</section>

<?= $this->endSection() ?>
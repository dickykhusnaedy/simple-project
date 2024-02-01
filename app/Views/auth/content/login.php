<?= $this->extend('auth/layout/index') ?>

<?= $this->section('content') ?>

<section class="section">
	<div class="container container-login">
		<div class="login-brand pt-3">
			<img src="<?= base_url('template/assets') ?>/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
		</div>
		<div class="card card-primary">
			<div class="card-header">
				<h4>Login</h4>
			</div>
			<div class="card-body">
				<form method="POST" action="<?= base_url('auth/login/check') ?>" class="needs-validation" novalidate="">
					<div class="row">
						<div class="form-group col-lg-12">
							<label for="email">Email</label>
							<input id="email" type="email" class="form-control" name="email" tabindex="1" placeholder="jhon@email.com" required autofocus>
							<div class="invalid-feedback">
								Please fill in your email
							</div>
						</div>
						<div class="form-group col-lg-12">
							<div class="d-block">
								<label for="password" class="control-label">Password</label>
								<div class="float-right">
									<a href="auth-forgot-password.html" class="text-small">
										Forgot Password?
									</a>
								</div>
							</div>
							<input id="password" type="password" class="form-control" name="password" tabindex="2" placeholder="••••••••" required>
							<div class="invalid-feedback">
								please fill in your password
							</div>
						</div>
						<div class="form-group col-lg-12">
							<button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
								Login
							</button>
						</div>
					</div>
				</form>
				<div class="text-muted text-center text-small">
					Don't have an account? <a href="<?= base_url('auth/register') ?>">Create One</a>
				</div>
			</div>
		</div>
		<div class="simple-footer">
			&copy; <?= date('Y') ?> Simple Project
		</div>
	</div>
</section>

<?= $this->endSection() ?>
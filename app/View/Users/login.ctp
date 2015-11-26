<div class="col-sm-4 col-sm-offset-1">
	<div class="login-form"><!--login form-->
		<h2>Login to your account</h2>
		<?php
			echo 
			$this->Form->create().
				$this->Form->input("username", array('placeholder'=>'Username/Email', 'label'=>false) ).
				$this->Form->input("password", array('placeholder'=>'Password', 'label'=>false) ).
				$this->Form->button("Login").
			$this->Form->end();
		?>
	</div><!--/login form-->
</div>
<div class="col-sm-1">
	<h2 class="or">OR</h2>
</div>
<div class="col-sm-4">
	<div class="signup-form"><!--sign up form-->
		<h2>New User Signup!</h2>
		<form action="#">
			<input type="text" placeholder="Name"/>
			<input type="email" placeholder="Email Address"/>
			<input type="password" placeholder="Password"/>
			<button type="submit" class="btn btn-default">Signup</button>
		</form>
	</div><!--/sign up form-->
</div>
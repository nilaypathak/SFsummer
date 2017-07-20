
<div class="login-page">
  <div class="form">
   
    <form class="login-form" method="POST" action="<?php echo $current_file;?>">
	<h3 style="font-weight:bold;">Welcome Again!<h3>
	<label for="username"><span class="glyphicon glyphicon-user"></span></label>
      <input type="text" name="username" id="username" placeholder="username" required />
	  <label for="password"><span class="glyphicon glyphicon-lock"></span></label>
      <input type="password" name="password" id="password" placeholder="password" required />
      <button>login</button>
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
	  <p class="message">Forgot password? <a href="register.php">Reset</a></p>
	  <?php echo '<h5 style="color:red; font-weight:bold;">'.$error.'</h5>';?>
    </form>
  </div>
</div>

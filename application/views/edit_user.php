<div class="col-md-12" style="padding:12px">
	<h2> Form Edit User</h2>

</div>
<div class="col-md-6" style="padding:12px">
	<?php 
	foreach ($user as $da1) {
		?>
	<form action="<?php echo site_url('home/editproses')?>" method="post">

			<div class="form-group row">
				<label for="username" class="col-sm-2 col-from-label"> Username </label>
				<div class="col-sm-10">
					<input type="text" name="id_user" value="<?php echo $da1['id_user'] ?>" hidden>
					<input type="text" name="username" value="<?php echo $da1['username'] ?>">
				</div>
			</div>
				<div class="form-group row">
				<label for="password" class="col-sm-2 col-from-label"> Password </label>
				<div class="col-sm-10">
					<input type="password" name="user_pass" value="<?php echo $da1['user_pas'] ?>" >
				</div>
			</div>
			<div class="form-group row">
				<label for="email" class="col-sm-2 col-from-label"> Email </label>
				<div class="col-sm-10">
					<input type="text" name="email" value="<?php echo $da1['email'] ?>">
				</div>
			</div>
				<div class="form-group row">
				<label for="user_role" class="col-sm-2 col-from-label"> User Role </label>
				<div class="col-sm-10">
					<input type="text" name="user_role" value="<?php echo $da1['user_role'] ?>">
				</div>
			</div>

			<button type="submit" name="submit" class="btn btn-primary"> Edit User</button>
			<a type="submit" name="submit" class="btn btn-danger" href="<?php echo site_url('home');?>"> Kembali </a>
	</form>
	</div>


		<?php

	}
	 ?>
	
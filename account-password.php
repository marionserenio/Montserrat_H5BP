<?php require('header.php') ?>

	<div class="content-box shadow">
		<div class="SearchHeader toggle">
			<input type="text">
		</div>
		<div class="SecondHeader">
			<a class="back" href="javascript:history.back()"></a>
			<h1>My Account</h1>
		</div>
		<div class="inner-content">
			<div class="account">
				<h3>Change password</h3>
				<div class="info">
					<div class="user-options">
						<input type="password" class="test_input" placeholder="********" onLoad="focus();">
						<hr>
						<input type="submit" class="change-password" value="Change password">
					</div>
				</div>
			</div>
		</div>			
	</div>
	<?php require('footer.php') ?>

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
				<h3>Account information</h3>
				<div class="info">
					<div class="user-options">
						<div class="email">marion.serenio@gmail.com</div>
						<hr>
						<a class="change-password" href="#">Change password</a>
						<a class="change-email" href="#">Change email</a>
					</div>
				</div>
				<h3>Subscriptions</h3>
				<div class="subscriptions">
					<ul>
						<li>
							<label class="left label" for="on_off">Hot Deals</label>
      						<input type="checkbox" class="onoffswitch" id="on_off" c/>	
      					</li>
						<li>
							<label class="left label" for="on_off">Newsletter</label>
      						<input type="checkbox" class="onoffswitch" id="on_off" c/>	
      					</li>
						<li>
							<label class="left label" for="on_off">Item 3</label>
      						<input type="checkbox" class="onoffswitch" id="on_off" c/>	
      					</li>      					      					
					</ul>      				
				</div>
				<h3>Notifications</h3>
				<div class="subscriptions">
					<ul>
						<li>
							<label class="left label" for="on_off">Item 1</label>
      						<input type="checkbox" class="onoffswitch" id="on_off" c/>	
      					</li>
						<li>
							<label class="left label" for="on_off">Item 2</label>
      						<input type="checkbox" class="onoffswitch" id="on_off" c/>	
      					</li>
						<li>
							<label class="left label" for="on_off">Item 3</label>
      						<input type="checkbox" class="onoffswitch" id="on_off" c/>	
      					</li>      					      					
					</ul>      				
				</div>
				<a class="logout" href="#">Logout</a>
			</div>
		</div>			
	</div>
	<?php require('footer.php') ?>

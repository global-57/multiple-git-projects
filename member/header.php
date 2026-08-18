
<div class="l">
<div class="loading"  style="" >
		<div class="w-100" align="center">
			<img  style="margin:auto;"  src="../images/logoloading.png"   />
		</div>
	</div>
	</div>

    <main>
        <section class="section-mobile">
            <header>
                <div class="container h-100">
                    <div class="flex-header">
                        <a class="h-logo" href="index.php"><img src="../images/logo.png"></a>
                        <div class="h-info">
                            <div class="info-balance">
								<a href="javascript:void(0)" onclick="location.reload();"><i class="material-icons">refresh</i></a>
								<span><?php echo $currencye; ?> <strong>0 - Not Login</strong></span>
							</div>
                        </div>
                        <div class="h-menu" align="right"><a class="menu-toggle" href="#"><i class="la la-bars"></i></a></div>
                    </div>
                </div>
            </header>
			
			<div class="container container-main">
			<!-- cryptofinanceusd.com --> 
<div class="mainmenuel" ondblclick="toggleMenu();" align="right">
	<div class="mainmenu">
		
		 
			<form method="post"  action="lg_process.php"> 
			<div class="mainmenu-login" align="left">
				<h6 class="mb-1">Login Form</h6>
				<p class="fs-14">Please enter User ID and Password correctly</p>
				<hr>
				<input name="userlogin" type="text" placeholder="User ID / Email">
				<input name="passlogin" type="password" placeholder="Your Password">

				<div class="btn-group btn-group-sm w-100" role="group">
					<button class="btn btn-dark" name="login" type="submit"><i class="la la-sign-in mr-1"></i>Login Now</button>

					<a class="btn btn-primary" href="signup.php" ><i class="la la-edit mr-1"></i>Register </a>
				</div>
			</div>
			</form> 
				
		
		
		<div class="main-menu-list" align="left">
			<a href="index.php"><img src="assets_landing/img/home%20(1).svg">Homepage</a>
						
			<a href="blogs.php"><img src="assets_landing/img/claims.svg" width="20" height="20">Promotions &amp; Information</a>
			
			
						
			<a  target="_blank"  href="https://wa.me/<?php echo hpne($mywhatsapp); ?>?text=halo%20"><img src="assets_landing/img/live-chat.svg" width="20" height="20">Contact Us</a>
		
		</div>
	</div>
    
</div>

			<div class="container-main-div  pb-5">
			<script src="https://public.bnbstatic.com/unpkg/growth-widget/cryptoCurrencyWidget@0.0.9.min.js" ></script>
<div class="binance-widget-marquee" data-cmc-ids="1,1027,1839,3408,52,74,5426,3890,5805,7083,2010,6636" data-theme="dark" data-transparent="true" data-locale="en" data-powered-by="Powered by" data-disclaimer="Disclaimer" >
</div>



<div class="homeflex-depo" align="left">
	<a class="homeflex-item" href="login.php"><img src="assets_landing/img/deposit.svg">Deposit</a>
	<a class="homeflex-item" href="login.php"><img src="assets_landing/img/withdrawal.svg" width="20" height="20">Withdraw</a>
	<a class="homeflex-item" href="login.php"><img src="assets_landing/img/profile.svg">Profile</a>
</div>
<!DOCTYPE html>
<html lang="en">

@include('frontend.common.meta')
<body id="body_wrapper" class="page page-id-29 woocommerce-account vc_responsive">	
	<!-- Preloading Screen -->
	
	<!-- End Preloading Screen -->
	
	<div class="body-wrapper theme-clearfix">
		<!-- HEADER -->
		
				<!-- END HEADER MENU -->
				
				@include('frontend.common.header')
		<!-- END HEADER -->
		
		<!-- MAIN -->
		<div id="main" class="theme-clearfix" role="document">
			<div class="breadcrumbs theme-clearfix">
				<div class="container">
					<ul class="breadcrumb">
						<li>
							<a id="home" href="home_style_1.html">Home</a>
							<span class="go-page"></span>
						</li>

						<li class="active">
							<span>My Account</span>
						</li>
					</ul>
				</div>
			</div>

			<div class="container">
				<div class="">
					<div id="contents" role="main" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="single post-29 page type-page status-publish hentry">
							<div class="entry">
								<div class="entry-content">
									<header>
										<h2 class="entry-title">My Account</h2>
									</header>

									<div class="entry-content">
										<div class="woocommerce">
											<div class="col2-set row" id="customer_login">
												

												<div class="col-lg-6">
													<h2>Register</h2>

													<form method="post" class="register">
														<p class="form-row form-row-wide">
															<label for="reg_email">
																Email address <span class="required">*</span>
															</label>
															
															<input type="email" class="input-text" name="email" id="reg_email" value="" />
														</p>

														<p class="form-row form-row-wide">
															<label for="reg_password">
																Password <span class="required">*</span>
															</label>

															<input type="password" class="input-text" name="password" id="reg_password" />
														</p>

														<!-- Spam Trap -->
														<div class="spam-trap" style="left: -999em;">
															<label for="trap">Anti-spam</label>
															<input type="text" name="email_2" id="trap" tabindex="-1" />
														</div>

														<p class="form-row">
															<input type="submit" class="button" name="register" value="Register" />
														</p>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN -->
		
		@include('frontend.common.footer')
		<!-- END FOOTER -->
	</div>
	<a id="ya-totop" href="#" style="display: none;"></a>
	
	
	@include('frontend.common.script')
</body>
</html>
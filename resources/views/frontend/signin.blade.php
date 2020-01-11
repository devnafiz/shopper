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


				<div class=" row ">
					<div id="contents" role="main" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="single post-29 page type-page status-publish hentry">
							<div class="entry ">
								<div class="entry-content">
									

									<div class="entry-content">
										<div class="woocommerce">
											<div class="col2-set row justify-content-md-center" id="customer_login">
													 @if(Session::has('loginError'))
									                <div class="alert alert-danger alert-dismissible fade show" role="alert">
									                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
									                    <span class="sr-only">@lang('website.Error'):</span>
									                    {!! session('loginError') !!}
									                    
									                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									                    	<span aria-hidden="true">&times;</span>
									                    </button>
									                </div>
									            @endif
									            @if(Session::has('success'))
									                <div class="alert alert-success alert-dismissible fade show" role="alert">
									                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
									                    <span class="sr-only">@lang('website.success'):</span>
									                    {!! session('success') !!}
									                    
									                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									                    	<span aria-hidden="true">&times;</span>
									                    </button>
									                </div>
									            @endif
												<div class="col-lg-6 col-md-6">
													<h2>Login</h2>

													<form method="post" class="login" action="{ URL::to('/process-login')}}" enctype="multipart/form-data">
														<p class="form-row form-row-wide">
															<label for="username">
																@lang('website.Email') <span class="required">*</span>
															</label>

															<input type="email" class="input-text" name="email" id="username" />
															<span class="help-block error-content" hidden>@lang('website.Please enter your valid email address')</span>
														</p>

														<p class="form-row form-row-wide">
															<label for="password">
																@lang('website.Password') <span class="required">*</span>
															</label>

															<input class="input-text" type="password" name="password" id="password" />
														</p>

														

														<p class="form-row">
															<input type="submit" class="button" name="login" value="Login" /> 
														</p>

														<p class="lost_password">
															<a href="{{ URL::to('/forgotPassword')}}" class="btn btn-link ml-1 mr-4">@lang('website.Forgot Password')</a>
														</p>
													</form>
												</div>
												<div class="col-lg-6 col-md-6">
													
														<h5 class="title-h5">@lang('website.New Customers')</h5>
														<p>@lang('website.login page text for customer')</p>

														<hr class="featurette-divider">
														<p class="text-center">@lang('website.Dont have account') <a href="{{ URL::to('/signup')}}" class="btn btn-link ml-1"><b>@lang('website.Sign Up')</b></a></p>
														@if($result['commonContent']['setting'][2]->value==1 and $result['commonContent']['setting'][61]->value==1)
														<p class="font-small dark-grey-text  d-flex justify-content-center mb-3 pt-2"> @lang('website.or Sign in with'):</p>

														<div class="row my-3 d-flex justify-content-center">
															<!--Facebook-->
											                @if($result['commonContent']['setting'][2]->value==1)
															<a href="login/facebook" class="btn btn-light facebook"><i class="fa fa-facebook"></i>@lang('website.Login with Facebook')</a>
											                @endif
											                @if($result['commonContent']['setting'][61]->value==1)
															<!--Google +-->
															<a href="login/google" class="btn btn-light google"><i class="fa fa-google-plus"></i>@lang('website.Login with Google')</a>
											                @endif
														</div>
											            @endif
												
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
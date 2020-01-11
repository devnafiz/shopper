<!DOCTYPE html>
<html lang="en">
@include('frontend.common.meta')

<body id="body_wrapper" class="page-template-page-home vc_responsive">
	<!-- Preloading Screen -->
	
	<!-- End Preloading Screen -->
	
	<div class="body-wrapper theme-clearfix" id="body_wrapper">
		<!-- HEADER -->
		@include('frontend.common.header')
		<!-- END HEADER -->
		
		<!-- MAIN -->
		<div id="main" class="theme-clearfix" role="document">
			<div class="breadcrumbs theme-clearfix">
				<div class="container">
					<ul class="breadcrumb">
						<li class="active">
							<span>Home</span>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="container">
				<div class="row">
					<div id="contents" role="main" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="single post-6 page type-page status-publish hentry">
							<div class="entry">
								<div class="entry-content">
									@yield('content')
									
							    </div>				
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MAIN -->
		
		<!-- FOOTER -->
		@include('frontend.common.footer')
		<!-- END FOOTER -->
	</div>
	
	<a id="ya-totop" href="#" style="display: none;"></a>
	
	
	@include('frontend.common.script')
	@yield('extra-css')
	
</body>
</html>
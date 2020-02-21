<!DOCTYPE html>

<html lang="pt-br">

	<?php $this->load->view('partials/head'); ?>

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->

		<?php $this->load->view('partials/header-mobile'); ?>

		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
				<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
					<?php $this->load->view('partials/aside'); ?>
					<?php $this->load->view('partials/aside-menu'); ?>
				</div>

				<!-- end:: Aside -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
						<?php //$this->load->view('partials/header-menu'); ?>
						<div></div>

						<!-- begin:: Header Topbar -->
						<div class="kt-header__topbar">

							<?php //$this->load->view('partials/search'); ?>
							<?php //$this->load->view('partials/notifications'); ?>
							<?php //$this->load->view('partials/quick-actions'); ?>
							<?php //$this->load->view('partials/my-cart'); ?>
							<?php //$this->load->view('partials/quick-panel-toggler'); ?>
							<?php //$this->load->view('partials/language-bar'); ?>
							<?php $this->load->view('partials/user-bar'); ?>
							
						</div>

						<!-- end:: Header Topbar -->
					</div>

					<!-- end:: Header -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<?php $this->load->view('partials/subheader'); ?>

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<!--Begin::Page Load-->

							<!--Begin::Row-->
							<div class="row">
								<div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
									<?php for ($i = 0; $i < count($views); $i++) :
										$this->load->view($views[$i]);
									endfor; ?>
								</div>
							</div>
							<!--End::Row-->

							<!--End::Page Load-->
						</div>

						<!-- end:: Content -->
					</div>

					<?php $this->load->view('partials/footer'); ?>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<?php //$this->load->view('partials/quick-panel'); ?>
		<?php $this->load->view('partials/scrolltop'); ?>
		<?php //$this->load->view('partials/sticky-toolbar'); ?>
		<?php //$this->load->view('partials/demo-panel'); ?>
		<?php //$this->load->view('partials/chat'); ?>

		<?php $this->load->view('partials/global-config'); ?>
		<?php $this->load->view('partials/global-scripts'); ?>
	</body>

	<!-- end::Body -->
</html>
<?php
	use sgpb\AdminHelper;
	$upgradeLink = SG_POPUP_RATE_US_URL;
	$buttonText = 'RATE US';
	if (SGPB_POPUP_PKG == SGPB_POPUP_PKG_FREE) {
		$upgradeLink = SG_POPUP_ALL_EXTENSIONS_URL;
		$buttonText = 'MORE EXTENSIONS';
	}
	$banner = AdminHelper::getBannerText();
?>
<div class="sgpb-wrapper sgpb-banner-wrapper">
	<div class="row">
		<div class="col-xs-12">
			<div class="sgpb-main-rate-us-banner-wrapper">
				<div class="row">
					<div class="col-xs-3 sgpb-rate-us-banner-1">
						<div class="row">
							<div class="col-xs-1"></div>
							<div class="col-xs-9">
								<a href="<?php echo SG_POPUP_ALL_EXTENSIONS_URL ;?>" target="_blank" class="sgpb-banner-logo-link"><div class="sgpb-banner-logo"></div></a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 sgpb-rate-us-banner-2">
						<div class="row">
							<div class="col-xs-12">
								<?php echo $banner; ?>
							</div>
						</div>
					</div>
					<div class="col-xs-3 sgpb-rate-us-banner-3">
						 <div class="row">
						 	<div class="col-xs-12">
								<ul class="sgpb-info-menu sg-info-text">
									<?php if (SGPB_POPUP_PKG == SGPB_POPUP_PKG_FREE): ?>
										<li>
											<a class="sgpb-banner-links" target="_blank" href="<?php echo SG_POPUP_RATE_US_URL; ?>"><span class="dashicons sgpb-dashicons-heart sgpb-info-text-white"></span><span class="sg-info-text"> <?php _e('Rate Us', SG_POPUP_TEXT_DOMAIN); ?></span></a>
										</li>
									<?php endif; ?>
									<li>
										<a class="sgpb-banner-links" target="_blank" href="<?php echo SG_POPUP_TICKET_URL; ?>"><span class="dashicons sgpb-dashicons-megaphone sgpb-info-text-white"></span> <?php _e('Submit Ticket', SG_POPUP_TEXT_DOMAIN); ?></a>
									</li>
									<li>
										<a class="sgpb-banner-links" target="_blank" href="https://wordpress.org/support/plugin/popup-builder"><span class="dashicons sgpb-dashicons-admin-plugins sgpb-info-text-white"></span> <?php _e('Support', SG_POPUP_TEXT_DOMAIN); ?></a>
										<a class="btn sgpb-upgrade-banner-btn" href="#" style="display: none;">
											<img src="<?php echo SG_POPUP_IMG_URL;?>star.png" width="30px">
											<span style="vertical-align: sub;"><?php _e($buttonText, SG_POPUP_TEXT_DOMAIN); ?></span>
										</a>
									</li>
									<li>
										<a class="sgpb-banner-links" target="_blank" href="https://wordpress.org/plugins/popup-builder/faq/"><span class="dashicons sgpb-dashicons-editor-help sgpb-info-text-white"></span> <?php _e('FAQ', SG_POPUP_TEXT_DOMAIN); ?></a>
									</li>
									<li>
										<a class="sgpb-banner-links" target="_blank" href="mailto:support@popup-builder.com?subject=Hello"><span class="dashicons sgpb-dashicons-email-alt sgpb-info-text-white"></span> <?php _e('Contact', SG_POPUP_TEXT_DOMAIN); ?></a>
									</li>
								</ul>
						 	</div>
						 </div>
					</div>
				</div>
			</div>
			<div>
				<span class="sgpb-info-close">+</span>
				<span class="sgpb-dont-show-again"><?php _e('Don\'t show again.', SG_POPUP_TEXT_DOMAIN); ?></span>
			</div>
		</div>
	</div>
</div>

function SGPBNotificationCenter() {

}

SGPBNotificationCenter.prototype.init = function()
{
	this.dismiss();
	this.reactivate();
};

SGPBNotificationCenter.prototype.dismiss = function()
{
	var that = this;
	jQuery('.sgpb-dismiss-notification-js').click(function() {
		var id = jQuery(this).attr('data-id');
		jQuery(this).addClass('disabled');
		jQuery(this).parent().prev().addClass('sgpb-disabled');

		var data = {
			nonce: SGPB_JS_PARAMS.nonce,
			action: 'sgpb_dismiss_notification',
			id: id
		};

		jQuery.post(ajaxurl, data, function(response) {
			response = JSON.parse(response);
			jQuery('.sgpb-each-notification-wrapper-js').empty();
			jQuery('.sgpb-each-notification-wrapper-js').html(response['content']);
			jQuery('.sgpb-notifications-count-span').html(response['count']);
			jQuery('.sgpb-menu-item-notification').html(response['count']);
			that.init();
		});
	});
};

SGPBNotificationCenter.prototype.reactivate = function()
{
	var that = this;
	jQuery('.sgpb-activate-notification-js').click(function() {
		var id = jQuery(this).attr('data-id');
		jQuery(this).addClass('disabled');

		var data = {
			nonce: SGPB_JS_PARAMS.nonce,
			action: 'sgpb_reactivate_notification',
			id: id
		};

		jQuery.post(ajaxurl, data, function(response) {
			jQuery('.sgpb-each-notification-wrapper-js').empty();
			jQuery('.sgpb-each-notification-wrapper-js').html(response);
			that.init();
		});
	});
};

jQuery(document).ready(function() {
	var notificationCenter = new SGPBNotificationCenter();
	notificationCenter.init();
});

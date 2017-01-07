/*
 * jQuery File Upload Plugin JS Example 8.9.0
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

$(function() {
	'use strict';

	// Initialize the jQuery File Upload widget:
	$('#fileupload').fileupload({
		// Uncomment the following to send cross-domain cookies:
		//xhrFields: {withCredentials: true},
		url: 'server/php/'
	});

	// Enable iframe cross-domain access via redirect option:
	$('#fileupload').fileupload(
			'option',
			'redirect',
			window.location.href.replace(
					/\/[^\/]*$/,
					'/cors/result.html?%s'
					)
			);

	// Demo settings:
	$('#fileupload').fileupload('option', 
	{
		url: '//asmecon.com/system/html/pages/instrumentosdos/explora/',
		// Enable image resizing, except for Android and Opera,
		// which actually support image resizing, but fail to
		// send Blob objects via XHR requests:
		disableImageResize: /Android(?!.*Chrome)|Opera/
				.test(window.navigator.userAgent),
		maxFileSize: 10000000000,
		acceptFileTypes: /(\.|\/)(gif|jpe?g|png|xlsx|doc|txt|docx|pdf|dwg|dxf|zip|accdb)$/i
	});

	// Upload server status check for browsers with CORS support:
	if ($.support.cors) {
		$.ajax({
			url: '//asmecon.com/system/html/pages/instrumentosdos/explora/server/php/',
			type: 'HEAD'
		}).fail(function() {
			$('<div class="alert alert-danger"/>')
					.text('Upload server currently unavailable - ' +
							new Date())
					.appendTo('#fileupload');
		});
	}

	// Initialize the jQuery File Upload widget:
	$('#fileupload').fileupload({
		// Uncomment the following to send cross-domain cookies:
		//xhrFields: {withCredentials: true},
		autoUpload: false,
		url: '//asmecon.com/system/html/pages/instrumentosdos/explora/server/php/'
	});
});
jQuery(function($){
 
	// on upload button click
	$('body').on( 'click', '.theme_options_upl', function(e){
 
		e.preventDefault();
		uploadImg(this);

 
	});
 
	// on remove button click
	$('body').on('click', '.theme_options_rmv', function(e){
 
		e.preventDefault();
		removeImg(this);
	});

	// on upload button click
	$('body').on( 'click', '.feature_upl', function(e){

		e.preventDefault();
		uploadImg(this);


	});

	// on remove button click
	$('body').on('click', '.feature_rmv', function(e){

		e.preventDefault();
		removeImg(this);
	});

	function uploadImg(this){
		var button = $(this),
		custom_uploader = wp.media({
			title: 'Insert image',
			library : {
				// uploadedTo : wp.media.view.settings.post.id, // attach to the current post?
				type : 'image'
			},
			button: {
				text: 'Use this image' // button label text
			},
			multiple: false
		}).on('select', function() { // it also has "open" and "close" events
			var attachment = custom_uploader.state().get('selection').first().toJSON();
			button.html('<img src="' + attachment.url + '">').next().val(attachment.id).next().show();
		}).open();
		$(".submit_btn").val("Save");
	}

	function removeImg(this) {
		var button = $(this);
		button.next().val(''); // emptying the hidden field
		button.hide().prev().html('Upload image');
	}

	/*// on upload button click
	$('body').on( 'click', '.feature_upl', function(e){
 
		e.preventDefault();
 
		var button = $(this),
		custom_uploader = wp.media({
			title: 'Insert image',
			library : {
				// uploadedTo : wp.media.view.settings.post.id, // attach to the current post?
				type : 'image'
			},
			button: {
				text: 'Use this image' // button label text
			},
			multiple: false
		}).on('select', function() { // it also has "open" and "close" events
			var attachment = custom_uploader.state().get('selection').first().toJSON();
			button.html('<img src="' + attachment.url + '">').next().val(attachment.id).next().show();
		}).open();
		$(".submit_btn").val("Save");
 
	});
 
	// on remove button click
	$('body').on('click', '.feature_rmv', function(e){
 
		e.preventDefault();
 
		var button = $(this);
		button.next().val(''); // emptying the hidden field
		button.hide().prev().html('Upload image');
	});*/
 
});

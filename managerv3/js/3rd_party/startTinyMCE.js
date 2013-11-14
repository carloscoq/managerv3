jQuery(function() {
	if(jQuery('textarea[name="editor_texto"]').html() != undefined) {
		tinyMCE.init({
	        mode : "specific_textareas",
	        editor_selector: 'editor_texto',
	        theme: 'advanced'
		});
	}
});

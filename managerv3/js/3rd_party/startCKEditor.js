jQuery(function() {
	if(jQuery('textarea[name="editor_texto"]').html() != undefined) {
		CKEDITOR.replace('editor_texto');
	}
})

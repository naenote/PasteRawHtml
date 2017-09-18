(function() {
	tinymce.create('tinymce.plugins.MyButtons', {
		init : function(ed, url) {
			ed.addButton( 'nae_paste_raw_html_button', {
				title : 'HTMLを挿入',
				image : url + '/pasteRawHtmlButton.png',
				cmd: 'nae_paste_raw_html_cmd'
			});
			ed.addCommand( 'nae_paste_raw_html_cmd', function() {
				var raw_html = window.prompt('Paste Raw HTML here.','');
				ed.execCommand('mceInsertContent', 0, raw_html);
			});
		},
		createControl : function(n, cm) {
			return null;
		},
	});
	/* Start the buttons */
	tinymce.PluginManager.add( 'custom_button_script', tinymce.plugins.MyButtons );
})();
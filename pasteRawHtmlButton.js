tinymce.PluginManager.add('paste_raw_html', function(editor, url) {
	editor.addButton('paste_raw_html', {
		tooltip: 'HTML挿入',
		image: url + '/pasteRawHtmlButton.png',
		onclick: function() {
			var raw_html = window.prompt('HTMLを挿入してください', '');
			editor.execCommand('mceInsertContent', 0, raw_html);
		}
	});
});

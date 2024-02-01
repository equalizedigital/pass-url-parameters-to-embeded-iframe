jQuery(function ($) {
	$(window).load(function () {
		const iframe = document.getElementById('rwcGetParams');
		if (document.contains(iframe)) {
			const loc = window.location.toString();
			const params = loc.split('?')[1];
			let query;
			if (params) {
				if (iframe.src.indexOf('?') >= 0) {
					query = '&';
				} else {
					query = '?';
				}
				const newsrc = iframe.src + query + params;
				$('#rwcGetParams').attr('src', newsrc);
			}
		}
	});
});

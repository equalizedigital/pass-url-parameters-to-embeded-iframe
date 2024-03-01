const EDPPI = EDPPI || {};

EDPPI.IframeParameterAppender = class {
	constructor(iframeIds) {
		this.iframeIds = Array.isArray(iframeIds) ? iframeIds : [iframeIds];
		this.init();
	}

	init() {
		document.addEventListener('DOMContentLoaded', () => {
			this.appendParamsToIframes();
		});
	}

	appendParamsToIframes() {
		window.addEventListener('load', () => {
			this.iframeIds.forEach((iframeId) => {
				const iframe = document.getElementById(iframeId);
				if (iframe && document.body.contains(iframe)) {
					const loc = window.location.toString();
					const params = loc.split('?')[1];
					if (params) {
						const query = iframe.src.includes('?') ? '&' : '?';
						const newsrc = iframe.src + query + params;
						iframe.setAttribute('src', newsrc);
					}
				}
			});
		});
	}
};

// Usage
new EDPPI.IframeParameterAppender(['rwcGetParams', 'eqd-get-params']);
// Or for a single iframe
//new EDPPI.IframeParameterAppender('rwcGetParams');

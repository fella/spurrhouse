import ctEvents from 'ct-events'

export const mount = () => {
	if (!window.elementorFrontend) {
		return
	}

	setTimeout(() => {
		elementorFrontend.elements.$document.off(
			'click',
			elementorFrontend.utils.anchors.getSettings('selectors.links'),
			elementorFrontend.utils.anchors.handleAnchorLinks
		)
	}, 1000)
}

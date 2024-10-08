import { createElement, Component } from '@wordpress/element'
import * as check from '@wordpress/element'
import ctEvents from 'ct-events'

import { __ } from 'ct-i18n'

import Extensions from './dashboard/screens/Extensions'

import Extension from './dashboard/screens/Extension'

import DemoInstall from './dashboard/screens/DemoInstall'
import SiteExport from './dashboard/screens/SiteExport'
import DemoToInstall from './dashboard/screens/DemoInstall/DemoToInstall'

import cachedFetch from './helpers/cached-fetch'
import { getStarterSitesStatus } from './dashboard/helpers/starter-sites'

getStarterSitesStatus()
	.then((response) => {
		if (response.status !== 511) {
			// We are good, do nothing
			return
		}

		fetch(
			`${ctDashboardLocalizations.ajax_url}?action=blocksy_dashboard_handle_incorrect_license`,
			{
				method: 'POST',
				body: JSON.stringify({}),
				headers: {
					Accept: 'application/json',
					'Content-Type': 'application/json',
				},
			}
		).then(({ success, data }) => {
			// Ignore result
		})
	})
	.catch((response) => {
		console.error('Error:', response)
	})

ctEvents.on('ct:dashboard:routes', (r) => {
	r.push({
		Component: (props) => <Extensions {...props} />,
		path: '/extensions',
	})

	r.push({
		Component: (props) => <Extension {...props} />,
		path: '/extensions/:extension',
	})

	if (ctDashboardLocalizations.plugin_data.has_demo_install === 'yes') {
		r.push({
			Component: (props) => <DemoInstall {...props} />,
			path: '/demos',
		})
	}
})

ctEvents.on('ct:dashboard:navigation-links', (r) => {
	if (ctDashboardLocalizations.plugin_data.has_demo_install === 'yes') {
		r.push({
			text: __('Starter Sites', 'blocksy-companion'),
			path: 'demos',
			getProps: ({ isPartiallyCurrent, isCurrent }) =>
				isPartiallyCurrent
					? {
							'aria-current': 'page',
					  }
					: {},
		})
	}

	r.push({
		text: __('Extensions', 'blocksy-companion'),
		path: '/extensions',

		onClick: (e) => {
			if (location.hash.indexOf('extensions') > -1) {
				e.preventDefault()
			}
		},

		getProps: ({ isPartiallyCurrent, isCurrent }) => {
			return {
				...(isPartiallyCurrent || isCurrent
					? {
							'aria-current': 'page',
					  }
					: {}),
			}
		},
	})
})

ctEvents.on('ct:dashboard:heading:after', (r) => {
	if (!ctDashboardLocalizations.plugin_data.is_pro) {
		return
	}

	r.content = <span>PRO</span>
})

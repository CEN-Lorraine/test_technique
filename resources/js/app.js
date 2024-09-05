import './bootstrap';
import '../css/custom.css';
import '../css/all.min.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

import Notifications from '@kyvg/vue3-notification';
import VueSweetAlert from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

import Layout from '@/Layout.vue';
import helpers from '@/helpers';

import DeleteParametreData from '@/components/DeleteParametreData.vue';

import "bootstrap/dist/css/bootstrap.css";
import "bootstrap/dist/js/bootstrap.js";

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
	resolve: name => {
    	const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    	let page = pages[`./Pages/${name}.vue`]
    	page.default.layout = page.default.layout || Layout
    	return page
  	},
  	title: (title) => `${title} - ${appName}`,
  	setup({ el, App, props, plugin }) {
    	createApp({ render: () => h(App, props) })
      	.use(plugin)
      	.use(ZiggyVue)
      	.use(helpers, App)
      	.use(VueSweetAlert)
      	.use(Notifications)
      	.component('Link', Link)
      	.component('delete-parametre-data', DeleteParametreData)
      	.mount(el)
  	},
  	progress: {
		delay: 250,
		color: '#29d',
		includeCSS: true,
		showSpinner: true,
	},
})
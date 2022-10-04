import { createRouter, createWebHistory } from "vue-router";
// admin
import homeAdminIndex from '../views/admin/index.vue'
import blankAdminIndex from '../views/admin/blank.vue'
import productAdminIndex from '../views/admin/products.vue'
import Dashboard from '../views/admin/dashboard.vue'
// pages
import homePageIndex from '../views/pages/home.vue'
import login from '../views/pages/login.vue'
import login_old from '../views/pages/login_old.vue'
import register from '../views/pages/register.vue'
import notFound from  '../notFound.vue'

const routes = [
	{ 
		path: '/admin/dashboard', name: 'Dashboard', component: Dashboard,
		meta: {
			requiresAuth: true
		}
	},
	{ 
		path: '/admin/home', name: 'adminHome', component: homeAdminIndex,
		meta: {
			requiresAuth: true
		}
	},
	{ 
		path: '/admin/blank', name: 'adminBlank', component: blankAdminIndex,
		meta: {
			requiresAuth: true
		}
	},
	{ 
		path: '/admin/products', name: 'adminProducts', component: productAdminIndex,
		meta: {
			requiresAuth: true
		}
	},
	{ 
		path: '/login',
		name: 'Login',
		component: login,
		meta: {
			requiresAuth: false
		}
	},
	{ 
		path: '/login_old',
		name: 'LoginOld',
		component: login_old,
		meta: {
			requiresAuth: false
		}
	},
	{ 
		path: '/register',
		name: 'Register',
		component: register,
		meta: {
			requiresAuth: false
		}
	},
	{ path: '/', name: 'Home', component: homePageIndex,
		meta: {
			requiresAuth: false
		}
	},
	{ path: '/:pathMatch(.*)*', name: 'notFound', component: notFound,
		meta: {
			requiresAuth: false
		}
	}, 
]

const router = createRouter({
	history: createWebHistory(), //process.env.BASE_URL
	routes
})

router.beforeEach((to, from) => {
	if(to.meta.requiresAuth && !localStorage.getItem('token')){
		return { name: 'Login' }
	}

	if(to.meta.requiresAuth === false && localStorage.getItem('token')){
		return { name: 'Dashboard' }
	}
})

export default router
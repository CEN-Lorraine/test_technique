<template>
	<div>
		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <Link class="navbar-brand" :href="route('home')">
                    {{app_name}}
                </Link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <Link :class="checkCurrentRoute(['home']) + ' nav-link'" :href="route('home')">
                                Accueil
                            </Link>
                        </li>
                        <li class="nav-item">
                            <Link :class="checkCurrentRoute(['projets']) + ' nav-link'" :href="route('projets.index')">
                                Projets
                            </Link>
                        </li>
                        <li class="nav-item">
                            <Link :class="checkCurrentRoute(['missions']) + ' nav-link'" :href="route('missions.index')">
                                Missions
                            </Link>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{auth_user.name}}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#" @click="logout()">
                                   	Déconnexion
                                </a>

<!--                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	</div>
</template>

<script setup>
import { inject, ref } from 'vue';
import { usePage, router } from '@inertiajs/vue3';

const app_name = inject('app_name');
const base_url = inject('base_url');

const page = usePage();
const auth_user = page.props.auth_user;

const current_route = route().current() ? ref(route().current()) : ref('home');

const checkCurrentRoute = (routes_names) =>
{
    let route_type = ['index', 'create', 'edit'];
    let resp = '';

    route_type.forEach((rt) => {
        routes_names.forEach((route_name) => {
            if(current_route.value == route_name || current_route.value === route_name+'.'+rt){
                resp = 'active';
            }
        })
    });

    return resp;
}

const logout = () =>
{
	axios.post(base_url+'/logout')
	.then(response => response.data)
	.then(data => {
		return window.location = base_url;
	})
	.catch((error) => {
		console.log(error)
	});
}

/*
 * Watch 
 */
router.on('finish', (event) => {
    current_route.value = route().current();
})


</script>
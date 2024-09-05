<template>
	<div>
		<Head title="Modifier une mission" />

		<MissionFormulaire
		:mission="props.mission"
		:url_retour="url_retour"
		@updateOrCreate="update"
		>
			
		</MissionFormulaire>
	</div>
</template>

<script setup>
import { inject } from 'vue';
import { Head, usePage, useForm } from '@inertiajs/vue3';
import MissionFormulaire from '@/Pages/Mission/MissionFormulaire.vue';

const props = defineProps(['mission']);
const use_page = usePage();
const url_retour = use_page.props.previous;

const showSuccessErrors = inject('showSuccessErrors');
const parseErrorMessage = inject('parseErrorMessage');

const update = (new_mission) => 
{
	const form = useForm(new_mission);
	form.put(route("missions.update", { mission: new_mission.id }), {
        onSuccess: (new_data) => {
        	if(use_page.props.flash.message){
        		showSuccessErrors(use_page.props.flash.message);
        	}
        },
        onError: (error) => {
        	showSuccessErrors(parseErrorMessage(error), 'error');
        }
	})
}

</script>
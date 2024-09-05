<template>
	<form class="form" @submit.prevent="updateOrCreate">
		<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2 align-items-center">
			<div class="fv-row mb-1">
				<label class="fs-6 fw-semibold form-label mt-3" for="financeur.nom">
					<span class="required">Nom</span>
				</label>

				<input type="text" class="form-control form-control-solid" id="financeur.nom" v-model="mission.nom" />
				<!-- <div class="text-danger" v-if="props.errors.nom">{{ props.errors.nom }}</div> -->
			</div>
		</div>

		<div class="d-flex justify-content-end mt-4">
			<button type="submit" class="btn btn-sm btn-success me-2">
				<i class="fas fa-save"></i> Enregistrer
			</button>
			<Link class="btn btn-sm btn-secondary" :href="props.url_retour">
				<i class="fas fa-undo"></i> Retour
			</Link>
		</div>
	</form>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps(['mission', 'url_retour', 'errors']);
const emit = defineEmits(['updateOrCreate'])

const mission = ref(props.mission);

const updateOrCreate = () =>
{
	emit('updateOrCreate', mission.value);
}

</script>
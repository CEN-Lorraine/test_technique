<template>
	<div>
		<Head title="Projets" />

		<div class="card">
			<div class="card-header d-flex justify-content-between align-items-center">
				Liste des projets
				<Link href="/projets/create" class="btn btn-success btn-sm">Créer un projet</Link>
			</div>

			<div class="card-body py-3">
				<div class="table-responsive">
					<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
						<thead>
							<tr class="fw-bold text-muted">
								<th>Nom</th>
								<th>Début</th>
								<th>Fin</th>
								<th class="min-w-100px text-end">Actions</th>
							</tr>
						</thead>

						<tbody>
							<tr v-for="projet in props.projets" :key="projet.id">
								<td>
									{{ projet.nom }}
								</td>
								<td>
									{{ projet.debut }}
								</td>
								<td>
									{{ projet.fin }}
								</td>
								<td class="text-end">
									<div class="d-flex justify-content-end">
										<Link :href="route('projets.edit', projet.id)" class="btn btn-primary btn-sm me-1">
											Modifier
										</Link>
										<button class="btn btn-danger btn-sm" @click="deleteElement(projet)">
											Supprimer
										</button>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';

const props = defineProps(['projets']);

const deleteElement = (projet) => {
	if (confirm('Voulez-vous vraiment supprimer ce projet ?')) {
		// Appel API pour supprimer le projet
		fetch(route('projets.destroy', projet.id), {
			method: 'DELETE',
			headers: {
				'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
			}
		})
		.then(response => {
			if (response.ok) {
				location.reload(); // Recharge la page pour voir les changements
			} else {
				alert('Erreur lors de la suppression du projet.');
			}
		});
	}
};
</script>

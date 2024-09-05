<template>
	<div>
		<Head title="projet" />

		<div class="card">
			<div class="card-header">
				Liste des projets
			</div>

			<div class="card-body py-3">
				<div class="table-responsive">
					<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
						<thead>
							<tr class="fw-bold text-muted">
								<th>Nom</th>
								<th>Début</th>
								<th>Fin</th>
								<th class="min-w-100px text-end">Modifier</th>
							</tr>
						</thead>

						<tbody>
							<tr v-for="projet in props.projets">
								<td>
									{{projet.nom}}
								</td>
								<td>
									{{projet.debut}}
								</td>
								<td>
									{{projet.fin}}
								</td>
								<td>

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

const deleteElement = (projet) =>
{
	console.log(projet)
}
</script>
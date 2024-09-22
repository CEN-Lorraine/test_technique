<template>
	<div>
		<Head title="Mission" />

		<div class="card">
			<div class="card-header">
				Liste des missions
			</div>

			<div class="card-body py-3">
				<!-- Bouton pour créer une nouvelle mission (en théorie :D) -->
				<div class="mb-3">
					<Link :href="route('missions.create')" class="btn btn-success">
						Créer une nouvelle mission
					</Link>
				</div>

				<div class="table-responsive">
					<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
						<thead>
							<tr class="fw-bold text-muted">
								<th>Nom</th>
								<th class="min-w-100px text-end">Modifier</th>
							</tr>
						</thead>

						<tbody>
							<tr v-for="mission in props.missions" :key="mission.id">
								<td>
									{{ mission.nom }}
								</td>
								<td>
									<div class="d-flex justify-content-end flex-shrink-0">
										<Link :href="route('missions.edit', mission.id)" class="btn btn-primary btn-sm me-1">
											<span class="svg-icon svg-icon-3">
												<i class="fa-solid fa-pencil"></i>
											</span>
										</Link>

										<delete-parametre-data
	                                        :id="mission.id"
	                                        :url="'missions.destroy'"
	                                        :propertie_name="'missions'"
	                                        :confirmTextHeader="'Supprimer cette mission ?'"
	                                        :confirmTextBody="'Voulez-vous vraiment supprimer cette mission ?'"
	                                    >
	                                    </delete-parametre-data>
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
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps(['missions']);
</script>

<template>
	<div>
		<Head title="Mission" />

		<div class="card">
			<div class="card-header">
				Liste des missions
			</div>

			<div class="card-body py-3">
				<div class="table-responsive">
					<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
						<thead>
							<tr class="fw-bold text-muted">
								<th>Nom</th>
								<th class="min-w-100px text-end">Modifier</th>
							</tr>
						</thead>

						<tbody>
							<tr v-for="mission in props.missions">
								<td>
									{{mission.nom}}
								</td>
								<td>
									<div class="d-flex justify-content-end flex-shrink-0">
										<Link :href="route('missions.edit', mission.id)" class="btn btn-primary btn-sm me-1">
											<span class="svg-icon svg-icon-3">
												<i class="fa-solid fa-pencil"></i>
											</span>
										</Link>
<!-- 
										<button class="btn-danger btn btn-icon btn-bg-light btn-active-color-white btn-sm me-1" @click="deleteElement(mission)">
											<i class="fas fa-trash-alt"></i>
										</button> -->

										<delete-parametre-data
	                                        :id="mission.id"
	                                        :url="'missions.destroy'"
	                                        :propertie_name="'missions'"
	                                        :confirmTextHeader = "'Supprimer cette mission ?'"
	                                        :confirmTextBody = "'Voulez-vous vraiment supprimer cette mission ?'"
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
import { Head } from '@inertiajs/vue3';

const props = defineProps(['missions']);

const deleteElement = (mission) =>
{
	console.log(mission)
}
</script>
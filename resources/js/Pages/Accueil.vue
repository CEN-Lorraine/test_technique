<template>
	<div>
		<Head title="Accueil" />
		<div>
			<p>
				Bienvenue sur le test technique développeur.se fullstack du Conservatoire d'espaces naturels de Lorraine
			</p>

			<p>
				Exercice a réaliser :
			</p>

			<ol>
				<li>Rajouter une fonctionnalité pour pouvoir créer une nouvelle mission (l’édition et la suppression sont déjà fonctionnelles).</li>
				<li>Régler le problème de suppression d’une mission</li>
				<li>
					Créer les fonctionnalités suivantes pour les projets :
					<ul>
						<li>Création</li>
						<li>Édition</li>
						<li>Suppression</li>
						<li>(Notes : Vous pouvez vous inspirer de ce qui a été fait dans l’onglet mission.)</li>
						<li>
							Ajouter dans le formulaire, la possibilité d’au moins relier une mission à un projet, l’idéal serait de pouvoir relier plusieurs missions à un projet.
						</li>
					</ul>
				</li>
				<li>
					Créer un nouvel espace où l’utilisateur pourra modifier son nom, son email et (optionnel) son mot de passe.
				</li>
			</ol>
		</div>
	</div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
</script>
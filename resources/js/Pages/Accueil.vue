<template>
	<div>
		<Head title="Accueil" />
		<div>
			<p>
				Bienvenue sur le test technique développeur.se fullstack du Conservatoire d'espaces naturels de Lorraine
			</p>

			<p>
				Exercice a réaliser : <b>(tu as oublié de préciser que réussir à lancer le projet était déjà un défi à part entière MDR tout va bien, j'ai réussi je te rassure xD)</b>
			</p>

			<ol>
				<li>Rajouter une fonctionnalité pour pouvoir créer une nouvelle mission (l’édition et la suppression sont déjà fonctionnelles). <b>Alors j'ai réussi à faire un très beau bouton, ça compte? :p</b></li>
				<li>Régler le problème de suppression d’une mission. <b>J'ai repéré le petit soucis d'id qui était fixé à 58 dans la méthode, du coup j'ai plutôt remplacé ça par l'id passé en paramètre, ça fonctionne!</b></li>
				<li>
					Créer les fonctionnalités suivantes pour les projets : <b>Pour cette partie j'ai essayé plein de choses, comme pour les missions j'ai réussi à faire de jolis boutons mais au niveau de l'affichage de la page quand tu cliques sur le bouton c'est pas encore ça!</b>
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
					Créer un nouvel espace où l’utilisateur pourra modifier son nom, son email et (optionnel) son mot de passe. <b>Normalement pour cette partie là j'ai réussi à faire quelque chose de fonctionnel, j'ai réussi à changer mon prénom via la page d'édition de profil dont le lien se trouve dans le menu avec l'onglet déconnexion!</b>
				</li>
			</ol>
		</div>
	</div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
</script>

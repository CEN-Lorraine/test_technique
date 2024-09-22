<!-- View pour l'édition d'un projet -->
<template>
    <div>
        <Head title="Modifier un projet" />
        <h1>Modifier le projet</h1>
        <form @submit.prevent="submit">
            <div>
                <label for="nom">Nom du projet</label>
                <input type="text" v-model="form.nom" required />
            </div>
            <div>
                <label for="missions">Sélectionner les missions</label>
                <select v-model="form.missions" multiple>
                    <option v-for="mission in missions" :key="mission.id" :value="mission.id">{{ mission.nom }}</option>
                </select>
            </div>
            <button type="submit">Mettre à jour</button>
        </form>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3';

const props = defineProps(['projet', 'missions']);
const form = ref({
    nom: props.projet.nom,
    missions: props.projet.missions.map(m => m.id)
});

const submit = () => {
    useForm(form.value).put(route('projets.update', props.projet.id));
};
</script>

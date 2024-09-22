<!-- View pour la création de projet -->
<template>
    <div>
        <Head title="Créer un projet" />
        <h1>Créer un nouveau projet</h1>
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
            <button type="submit">Créer</button>
        </form>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3';

const props = defineProps(['missions']);
const form = ref({
    nom: '',
    missions: []
});

const submit = () => {
    useForm(form.value).post(route('projets.store'));
};
</script>

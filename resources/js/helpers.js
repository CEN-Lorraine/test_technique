import { router } from '@inertiajs/vue3';
import { ref } from 'vue';
import { notify } from "@kyvg/vue3-notification";

const base_url = import.meta.env.VITE_APP_URL || 'Laravel';
const app_name = import.meta.env.VITE_APP_NAME || 'Laravel';

/*
 * Affiche les succès et les erreurs
 */
const showSuccessErrors = (message, type = 'success') => {
    let string = "<ul>";
    if(Array.isArray(message)){
        message.forEach(function(item){
            string += "<li>"+item+"</li>";
        })
        
    }else{
        string += "<li>"+message+"</li>";
    }
    string += "</ul>";

    return notify({
        group: 'success_error',
        title: type === 'success' ? 'Succès' : 'Erreur',
        type: type,
        duration: 5000,
        text: string
    });
}

/*
 * Si un ou plusieurs messages du back-end, on push le ou les messages dans la variable errors
 */
const parseErrorMessage = (message) => {
    let errors = [];
    if(message != null){
        if((typeof message === 'object' && !Array.isArray(message)) || Array.isArray(message)){
            Object.keys(message).map(function(objectKey, index) {
                let value = message[objectKey];
                // errors.push(value[0]);
                errors.push(value)
            });
        }else{
            errors.push(message);
        }
    }

    return errors;
}

export default function helpers(app){
	app.provide('app_name', app_name);
	app.provide('base_url', base_url);
	app.provide('showSuccessErrors', showSuccessErrors);
	app.provide('parseErrorMessage', parseErrorMessage);
}
<template>
    <button class="btn-danger btn btn-icon btn-bg-light btn-active-color-white btn-sm me-1" @click="deleteElement(id)">
        <i class="fas fa-trash-alt"></i>
    </button>
</template>

<script setup>
import { inject } from 'vue';
import { usePage, useForm } from '@inertiajs/vue3';
import Swal from 'sweetalert2'

const props = defineProps(['id', 'url', 'confirmTextHeader', 'confirmTextBody', 'propertie_name'])
const emit = defineEmits(['deleteData']);

const base_url = inject('base_url');
const showSuccessErrors = inject('showSuccessErrors');
const parseErrorMessage = inject('parseErrorMessage');
const form = useForm({});
const use_page = usePage();

const deleteElement = (data_id) =>
{
	Swal.fire({
        title: props.confirmTextHeader,
        text: props.confirmTextBody+' cette action est irréversible!',
        icon: 'question',
        confirmButtonText:'<i class="fa fa-thumbs-up"></i> Oui!',
        confirmButtonAriaLabel: 'Oui',
        confirmButtonColor: '#28a745',
        showCancelButton: true,
        cancelButtonText:'<i class="fa fa-thumbs-down"></i> Non',
        cancelButtonAriaLabel: 'Non',
        cancelButtonColor: '#dc3545',
    }).then((result) => {
        if(result.isConfirmed) {
            form.delete(route(props.url, {'id': data_id}), {
                onSuccess: () => {
                    if(use_page.props.flash.message){
                        showSuccessErrors(use_page.props.flash.message);
                    }
                },
                onError: (error) => {
                    showSuccessErrors(parseErrorMessage(error), 'error');
                }
            });
        }
    }); 
}
</script>
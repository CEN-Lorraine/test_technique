<template>
	<div>
		<Menu></Menu>

        <notifications group="success_error" position="bottom left" width="500">
            <template #body="props">
                <div :class="[(props.item.type === 'success' ? 'success' : 'error'), ' vue-notification-template vue-notification']">
                    <div class="notification-title">
                        {{props.item.title}}
                    </div>
                    <div class="notification-content">
                        <span v-html="props.item.text"></span>
                    </div>
                </div>
            </template>
        </notifications>

        <main class="container mt-4">
            <transition name="fade" mode="out-in">
                <slot />
            </transition>
        </main>
	</div>
</template>

<script setup>
import Menu from '@/Menu/Menu.vue';

</script>
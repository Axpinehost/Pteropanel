<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    breadcrumbData: Array
});


</script>

<template>
    <div>
        <nav class="bg-grey-light rounded-md w-full font-bold">
            <ol class="list-reset flex">
                <template v-for="(link, index) in breadcrumbData">
                    <template li v-if="index != breadcrumbData.length-1">
                        <li><Link :href="route(link.route)" class="text-theme-dark hover:text-gray-600">{{ link.text }}</Link></li>
                        <li><span class="text-theme-dark mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg></span></li>
                    </template>
                    <li v-else class="text-theme">{{ link.text }}</li>
                </template>
            </ol>
        </nav>
    </div>
</template>

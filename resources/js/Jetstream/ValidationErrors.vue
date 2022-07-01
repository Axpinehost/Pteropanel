<script setup>
import { computed } from 'vue';
import { usePage } from '@inertiajs/inertia-vue3';

const errors = computed(() => usePage().props.value.errors);
const hasErrors = computed(() => Object.keys(errors.value).length > 0);
</script>

<template>
    <div class="bg-red-500 rounded-lg py-5 px-6 mb-4 text-base text-white mb-3" role="alert" v-if="hasErrors">
        <ul class="list-disc list-inside text-sm">
            <li v-for="(error, key) in errors" :key="key">
                {{ error }}
            </li>
        </ul>
    </div>
</template>

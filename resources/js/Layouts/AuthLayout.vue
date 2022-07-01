<script setup>
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    title: String,
});
</script>

<template>
    <section class="h-full md:h-screen login">
        <div class="h-full wrapper">
            <div class="container py-12 px-6 h-full mx-auto">
                <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                    <div class="xl:w-10/12">
                        <!-- Page Content -->
                        <main>
                            <slot />
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

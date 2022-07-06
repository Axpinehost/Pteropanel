<script setup>
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { Head, Link } from '@inertiajs/inertia-vue3';
import Breadcrumb from '@/Components/Layouts/AppLayout/Breadcrumb.vue';
import SideNav from '@/Components/Layouts/AppLayout/SideNav.vue';
import TopNav from '@/Components/Layouts/AppLayout/TopNav.vue';

defineProps({
    title: String,
    breadcrumbData: Array
});
</script>

<template ref="app">
    <div id="panel-layout">
        <SideNav/>
        <TopNav/>
        <div class="page-content">
            <!-- Page Heading -->
            <header v-if="$slots.header">
                <div class="max-w-7xl mx-auto flex justify-between py-6 px-4 sm:px-6 lg:px-8">
                    <div>
                        <h2 class="font-bold text-xl text-theme-dark leading-tight">
                            <slot name="header" />
                        </h2>
                    </div>
                    <Breadcrumb :breadcrumbData="breadcrumbData"/>
                </div>
            </header>
            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>

<script>
export default {
}
</script>

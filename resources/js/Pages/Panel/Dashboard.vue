<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import HeaderSlider from '@/Components/Panel/Dashboard/HeaderSlider.vue';
import GamesGrid from '@/Components/Panel/Dashboard/GamesGrid.vue';
</script>

<template>
    <Head title="Dashboard" />
    <AppLayout :breadcrumbData="breadcrumbData">
        <template #header>
            Dashboard
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <HeaderSlider/>
                <GamesGrid/>
            </div>
        </div>
    </AppLayout>
</template>

<script>
export default {
      components: {
    HeaderSlider,
    GamesGrid
  },
  data() {
    return {
      breadcrumbData: [{"text":"Pteropanel","route":"dashboard"},{"text":"Dashboard","route":"dashboard"}]
    }
  }
}
</script>

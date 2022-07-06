<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="Dashboard" :breadcrumbData="breadcrumbData">
        <Head title="Dashboard" />
        <template #header>
            My Tickets
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                Content
            </div>
        </div>
    </AppLayout>
</template>

<script>
export default {
      components: {
  },
  data() {
    return {
      breadcrumbData: [{"text":"Pteropanel","route":"dashboard"},{"text":"My tickets","route":"dashboard"}]
    }
  }
}
</script>

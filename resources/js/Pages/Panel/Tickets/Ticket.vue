<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { useForm } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

const form = useForm({
    type: '',
    title: '',
    content: ''
});

const sendTicket = () => {
    form.put(route('tickets.newTicket.send'), {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
        },
        onError: () => {
            //TODO Handle errors.
        },
    });
};
</script>

<template>
    <Head :title="'Ticket #' + $page.props.ticket.id" />
    <AppLayout :breadcrumbData="breadcrumbData">
        <template #header>
            Viewing a ticket
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-4 bg-gray-50 shadow rounded">
                    <div class="flex justify-between font-bold">
                        <div>{{ $page.props.user.name }}</div>
                        <div>{{ $page.props.ticket.created_at }}</div>
                    </div>
                    <div class="pt-8 pb-4" v-html="$page.props.ticket.content">
                    </div>
                </div>
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
      breadcrumbData: [{"text":"Pteropanel","route":"dashboard"},{"text":"My tickets","route":"myTickets"}, {"text":"Ticket #" + this.$page.props.ticket.id ,"route":"dashboard"}]
    }
  }
}
</script>

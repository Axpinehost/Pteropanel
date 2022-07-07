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
    <Head title="New Ticket" />
    <AppLayout :breadcrumbData="breadcrumbData">
        <template #header>
            New Ticket
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Ticket</h3>
                                    <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                                </div>
                            </div>
                            <div class="mt-5">
                            <form @submit.prevent="sendTicket" novalidate>
                                <div class="shadow sm:rounded-md sm:overflow-hidden">

                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                                        <div>
                                            <label for="about" class="block text-sm font-medium text-gray-700"> Ticket reason </label>
                                            <select             
                                            id="type"
                                            v-model="form.type"
                                            class="border border-gray-300 text-sm rounded-lg block w-full mt-1 pb-2.5"
                                            required>
                                                <option>My Server</option>
                                                <option>Billing</option>
                                                <option>Other..</option>
                                            </select>
                                        </div>

                                        <div>
                                            <label for="title" class="block text-sm font-medium text-gray-700"> Title </label>
                                            <div class="mt-1">
                                                <input
                                                id="title"
                                                v-model="form.title"
                                                type="text"
                                                class="flex-1 block w-full rounded-md sm:text-sm border-gray-300 w-100" 
                                                placeholder=""
                                                required>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="about" class="block text-sm font-medium text-gray-700"> Content </label>
                                            <div class="mt-1">
                                               <textarea 
                                                id="content"
                                                v-model="form.content"
                                                rows="15" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" 
                                                placeholder=""
                                                required
                                                style="display:none;"></textarea>
                                                <ckeditor :editor="editor" v-model="form.content" :config="editorConfig"></ckeditor>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                        <button @onClick="sendTicket" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-theme-dark">Send ticket</button>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export default {
      components: {
  },
  data() {
    return {
      breadcrumbData: [{"text":"Pteropanel","route":"dashboard"},{"text":"My tickets","route":"myTickets"}, {"text":"New ticket","route":"dashboard"}],
      editor: ClassicEditor,
      editorData: '',
      editorConfig: {
        height: 300,
        toolbar: {
            removeItems: [ 'heading', 'link', 'insertTable', 'mediaEmbed', 'blockQuote', 'uploadImage', 'indent', 'outdent', 'bulletedList', 'numberedList',]
        }
      }
    }
  }
}
</script>

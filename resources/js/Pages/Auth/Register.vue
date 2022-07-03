<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import AuthLayout from '@/Layouts/AuthLayout.vue';
import JetAuthenticationCard from '@/Jetstream/AuthenticationCard.vue';
import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo.vue';
import JetButton from '@/Jetstream/Button.vue';
import JetInput from '@/Jetstream/Input.vue';
import JetCheckbox from '@/Jetstream/Checkbox.vue';
import JetLabel from '@/Jetstream/Label.vue';
import JetValidationErrors from '@/Jetstream/ValidationErrors.vue';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Register"/>
    <AuthLayout>
        <div class="block bg-white shadow-lg rounded-lg">
            <div class="lg:flex lg:flex-wrap g-0">
                <div class="lg:w-6/12 px-4 md:px-0">
                    <div class="md:p-12 md:mx-6">
                        <div class="text-center">
                        <img
                            class="mx-auto w-48"
                            src="@assets/images/auth/logo.png"
                            alt="logo"
                        />
                        <h4 class="text-xl font-semibold text-gray-500 mt-1 mb-12 pb-1">Pteropanel Development</h4>
                        </div>
                        <JetValidationErrors class="mb-4" />
                        <form @submit.prevent="submit">
                        <div class="mb-4">
                            <input
                            id="name"
                            v-model="form.name"
                            type="text"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="First and last name"
                            />
                        </div>
                        <div class="mb-4">
                            <input
                            id="email"
                            v-model="form.email"
                            type="email"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Email"
                            />
                        </div>
                        <div class="mb-4">
                            <input
                            id="password"
                            v-model="form.password"
                            type="password"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Password"
                            />
                        </div>
                        <div class="mb-4">
                            <input
                            id="password_confirmation"
                            v-model="form.password_confirmation"
                            type="password"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            placeholder="Password confirmation"
                            />
                        </div>
                        <div class="mb-4">
                            <JetLabel for="terms">
                                <div class="flex items-center">
                                    <JetCheckbox id="terms" v-model:checked="form.terms" name="terms" />

                                    <div class="ml-2">
                                        I agree to the <a target="_blank" href="#" class="underline text-gray-600 hover:text-gray-900">Terms of Service</a> and <a target="_blank" href="#" class="underline text-gray-600 hover:text-gray-900">Privacy Policy</a>
                                    </div>
                                </div>
                            </JetLabel>
                        </div>
                        <div class="text-center pt-1 mb-2 pb-1">
                            <button
                            class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md bg-green-500 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                            :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                            type="submit"
                            >
                            Sign up
                            </button>
                        </div>
                        <div class="flex flex-row-reverse items-center justify-between pb-6 font-medium">
                            <Link :href="route('login')" class="text-theme hover:text-gray-500">
                                <span class="mb-0 mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.707 3.293a1 1 0 010 1.414L5.414 7H11a7 7 0 017 7v2a1 1 0 11-2 0v-2a5 5 0 00-5-5H5.414l2.293 2.293a1 1 0 11-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    Return to the login
                                </span>
                            </Link>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none bg-theme">
                    <div class="text-white px-4 py-6 md:p-12 md:mx-6">
                        <h4 class="text-xl font-semibold mb-6">We are more than just a company</h4>
                        <p class="text-sm">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </AuthLayout>
</template>

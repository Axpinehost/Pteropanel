<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import HomeLayout from '@/Layouts/HomeLayout.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />
    <HomeLayout>
    <div class="home-header">
        <div class="home-wrapper flex flex-col">
            <div class="md:w-1/2 mx-auto text-center">
                <h1 class="font-medium leading-tight text-6xl mt-0 mb-8 text-white tracking-widest">START A MINECRAFT SERVER</h1>
                <p class="text-white">
                Our Minecraft Hosting plans begin at $2.50, and have the option of easily and automatically upgrading at any point, only charging you the difference between the upgraded package cost and your remaining days on your current plan.
                </p>
                <a href="" class="inline-block px-6 py-3 border-4 text-white bg-green-500 border-green-400 my-8 uppercase font-bold">Compare our plans</a>
                <p class="text-white font-bold uppercase">"Awesome minecraft servers"</p>
                <ul class="flex justify-center">
                    <li>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-green-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                        </svg>
                    </li>
                    <li>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-green-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                        </svg>
                    </li>
                    <li>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-green-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                        </svg>
                    </li>
                    <li>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-green-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                        </svg>
                    </li>
                    <li>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-green-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                        </svg>
                    </li>
                </ul>
            </div>
            <div class="home-features w-full flex">
                <div class="w-1/2 text-white feature-container mx-12 feature-1">
                    <a href="">
                        <div class="feature-wrapper flex flex-col justify-center text-center">
                            <div class="font-medium text-4xl font-bold">MINECRAFT</div>
                            <div class="font-medium text-4xl">SERVERS</div>
                            <div class="description">Vanilla, Forge, SpigotMC and more!</div>
                        </div>
                    </a>
                </div>
                <div class="w-1/2 text-white feature-container mx-12 feature-2">
                    <a href="">
                        <div class="feature-wrapper flex flex-col justify-center text-center">
                            <div class="font-medium text-4xl font-bold">GAME</div>
                            <div class="font-medium text-4xl">SERVERS</div>
                            <div class="description">Rust, Ark, CS:GO, SA-MP and more!</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="home-testimonials border-b-4 border-green-400">
        <div class="container mx-auto text-center">
            <h2 class="font-medium leading-tight text-3xl text-theme tracking-widest">TESTIMONIALS</h2>
            <h3 class="font-medium leading-tight text-3xl text-white font-bold">WHAT ARE PEOPLE SAYING ABOUT US?</h3>
            <div class="carousel slide carousel-fade relative" data-bs-ride="carousel">
                <div class="carousel-inner relative w-full overflow-hidden">
                    <div class="carousel-item active relative float-left w-full">
                        <div class="review">
                            <p  class="text-white">Our family wanted to play together on a private hosted server and Shockbyte was well reviewed online. They made it very easy to start and maintain the server, and had many options for smaller servers that suited our family size.</p>
                            <div class="source">
                                <div class="text-white font-bold">Ism1tha A</div>
                                <div class="text-theme font-bold">Groovy Gang</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <div class="review">
                            <p  class="text-white">Our family wanted to play together on a private hosted server and Shockbyte was well reviewed online. They made it very easy to start and maintain the server, and had many options for smaller servers that suited our family size.</p>
                            <div class="source">
                                <div class="text-white font-bold">Ism1tha B</div>
                                <div class="text-theme font-bold">Groovy Gang</div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <div class="review">
                            <p  class="text-white">Our family wanted to play together on a private hosted server and Shockbyte was well reviewed online. They made it very easy to start and maintain the server, and had many options for smaller servers that suited our family size.</p>
                            <div class="source">
                                <div class="text-white font-bold">Ism1tha C</div>
                                <div class="text-theme font-bold">Groovy Gang</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-info flex flex-row-reverse">
        <div class="container flex flex-row-reverse">
            <div class="md:w-1/2 flex flex-col justify-center items-end px-12 text-right">
                <div class="font-medium text-4xl text-theme tracking-widest">MANY</div>
                <div class="font-medium text-5xl text-white tracking-widest font-bold">FEATURES</div>
                <p class="font-light text-2x1 text-white py-4">WE PROVIDE BENEFITS THAT OUR COMPETITORS SIMPLY CAN'T. OUR EXCLUSIVE BENEFITS INCLUDING: GUARANTEED DDOS PROTECTION, 100% UPTIME, ALWAYS-ONLINE SUPPORT, FREE SUBDOMAINS, MCPC & MCPE CROSS-COMPATIBILITY AND MUCH MORE.</p>
                <a href="" class="inline-block px-6 py-3 border-4 text-white bg-green-500 border-green-400 my-4 uppercase font-bold">Compare our plans</a>
            </div>
        </div>
    </div>
    </HomeLayout>
</template>

<script>
export default {
  data() {
    return {
      message: 'Hello World!'
    }
  },
  created () {
  },
  methods: {
  }
}
</script>
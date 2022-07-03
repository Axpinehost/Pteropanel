<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import Flickity from 'vue-flickity';
</script>

<template>
    <AppLayout title="Dashboard" :breadcrumbData="breadcrumbData">
        <Head title="Dashboard" />
        <template #header>
            Dashboard
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <flickity ref="flickity" :options="flickityOptions">
                    <div class="carousel-cell bg-red-400 bg-center bg-cover" :style="{ backgroundImage: `url(${require('@assets/images/panel/welcome/header-minecraft.png').default})` }">Minecraft Servers</div>
                    <div class="carousel-cell bg-green-400 bg-center bg-cover" :style="{ backgroundImage: `url(${require('@assets/images/panel/welcome/header-rust.jpg').default})` }">Rust Servers</div>
                    <div class="carousel-cell bg-yellow-400 bg-center bg-cover" :style="{ backgroundImage: `url(${require('@assets/images/panel/welcome/header-cs.jpg').default})` }">Counter Strike Servers</div>
                    <div class="carousel-cell bg-blue-400 bg-center bg-cover" :style="{ backgroundImage: `url(${require('@assets/images/panel/welcome/header-dayz.jpg').default})` }">DayZ Servers</div>
                    <div class="carousel-cell bg-gray-400 bg-center bg-cover" :style="{ backgroundImage: `url(${require('@assets/images/panel/welcome/header-ark.jpg').default})` }">ARK Servers</div>
                    <div class="carousel-cell bg-pink-400 bg-center bg-cover" :style="{ backgroundImage: `url(${require('@assets/images/panel/welcome/header-more.jpg').default})` }">And more</div>
                </flickity>
                <div class="grid grid-cols-4 gap-4 my-16 p-4 shadow sm:rounded-tl-md sm:rounded-tr-md bg-theme">
                    <div class="flex flex-col justify-center text-center text-white py-36 bg-green-400 font-bold">Game 01</div>
                    <div class="flex flex-col justify-center text-center text-white py-36 bg-red-400 font-bold">Game 02</div>
                    <div class="flex flex-col justify-center text-center text-white py-36 bg-yellow-400 font-bold">Game 03</div>
                    <div class="flex flex-col justify-center text-center text-white py-36 bg-blue-400 font-bold">Game 04</div>
                    <div class="flex flex-col justify-center text-center text-white py-36 bg-pink-400 font-bold">Game 05</div>
                    <div class="flex flex-col justify-center text-center text-white py-36 bg-gray-400 font-bold">Game 06</div>
                    <div class="flex flex-col justify-center text-center text-white py-36 bg-purple-400 font-bold">Game 07</div>
                    <div class="flex flex-col justify-center text-center text-white py-36 bg-green-400 font-bold">Game 08</div>
                    <div class="flex flex-col justify-center text-center text-white py-36 bg-red-400 font-bold">Game 09</div>
                    <div class="flex flex-col justify-center text-center text-white py-36 bg-yellow-400 font-bold">Game 10</div>
                    <div class="flex flex-col justify-center text-center text-white py-36 bg-blue-400 font-bold">Game 11</div>
                    <div class="flex flex-col justify-center text-center text-white py-36 bg-pink-400 font-bold">Game 12</div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
export default {
      components: {
    Flickity
  },
  data() {
    return {
      breadcrumbData: [{"text":"Pteropanel","route":"dashboard"},{"text":"Dashboard","route":"dashboard"}],
      flickityOptions: {
        prevNextButtons: false,
        autoPlay: true,
        pageDots: false
      }
    }
  }
}
</script>

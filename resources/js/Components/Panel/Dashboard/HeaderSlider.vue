<script setup>
import Flickity from 'vue-flickity';
</script>

<template>
    <flickity ref="flickity" :options="flickityOptions">
        <div class="carousel-cell bg-red-400 bg-center bg-cover" :style="{ backgroundImage: `url(${require('@assets/images/panel/welcome/header-minecraft.png').default})` }">Minecraft Servers</div>
        <div class="carousel-cell bg-green-400 bg-center bg-cover" :style="{ backgroundImage: `url(${require('@assets/images/panel/welcome/header-rust.jpg').default})` }">Rust Servers</div>
        <div class="carousel-cell bg-yellow-400 bg-center bg-cover" :style="{ backgroundImage: `url(${require('@assets/images/panel/welcome/header-cs.jpg').default})` }">Counter Strike Servers</div>
        <div class="carousel-cell bg-blue-400 bg-center bg-cover" :style="{ backgroundImage: `url(${require('@assets/images/panel/welcome/header-dayz.jpg').default})` }">DayZ Servers</div>
        <div class="carousel-cell bg-gray-400 bg-center bg-cover" :style="{ backgroundImage: `url(${require('@assets/images/panel/welcome/header-ark.jpg').default})` }">ARK Servers</div>
        <div class="carousel-cell bg-pink-400 bg-center bg-cover" :style="{ backgroundImage: `url(${require('@assets/images/panel/welcome/header-more.jpg').default})` }">And more</div>
    </flickity>
</template>

<script>
export default {
      components: {
    Flickity
  }
}
</script>
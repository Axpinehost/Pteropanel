<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div id="side-nav">
        <div class="header text-3xl text-white font-bold"><Link :href="route('home')">Pteropanel</Link></div>
        <div class="menu">
            <ul>
                <li class="nav-label first">Main navigation</li>
                <li class="nav-section has-arrow">
                    <a href="#" @click="toggleSideNavSection($event)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd" />
                        </svg>
                        Dashboard
                    </a>
                    <ul>
                        <li><Link :href="route('dashboard')" 
                        :class="[route().current('dashboard') ? 'active': '']">Home</Link></li>
                        <li><a href="">My servers</a></li>
                        <li><a href="">Create new server</a></li>
                    </ul>
                </li>
                <li class="nav-label">Support</li>
                <li class="nav-section has-arrow">
                    <a href="#" @click="toggleSideNavSection($event)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M2.94 6.412A2 2 0 002 8.108V16a2 2 0 002 2h12a2 2 0 002-2V8.108a2 2 0 00-.94-1.696l-6-3.75a2 2 0 00-2.12 0l-6 3.75zm2.615 2.423a1 1 0 10-1.11 1.664l5 3.333a1 1 0 001.11 0l5-3.333a1 1 0 00-1.11-1.664L10 11.798 5.555 8.835z" clip-rule="evenodd" />
                        </svg>
                        Support
                    </a>
                    <ul>
                        <li><Link :href="route('myTickets')" 
                        :class="[route().current('myTickets') ? 'active': '']">My tickets</Link></li>
                        <li><a href="">Closed tickets</a></li>
                        <li><a href="">FAQ</a></li>
                    </ul>
                </li>
                <li class="nav-label">Administration</li>
                <li class="nav-section has-arrow">
                    <a href="#" @click="toggleSideNavSection($event)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                        Accounts
                    </a>
                    <ul>
                    </ul>
                </li>
                <li class="nav-section has-arrow">
                    <a href="#" @click="toggleSideNavSection($event)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd" />
                        </svg>
                        Servers
                    </a>
                    <ul>
                    </ul>
                </li>
                <li class="nav-section has-arrow">
                    <a href="#" @click="toggleSideNavSection($event)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 6a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 100 4v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2a2 2 0 100-4V6z" />
                        </svg>
                        Tickets
                    </a>
                    <ul>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    components: {
  },
  created() {
  },
  mounted() {
    /* Sidenav */
    let sideNav = document.getElementById("side-nav");
    let navItems = sideNav.getElementsByClassName('active');
    if(navItems.length) {
        navItems[0].closest(".nav-section").classList.add("open");
    }
  },
  methods: {
    toggleSideNavSection(event){
        let navSection = event.target.parentElement;
        if(navSection.classList.contains("open")) navSection.classList.remove("open");
        else navSection.classList.add("open");
    }
  }
}
</script>
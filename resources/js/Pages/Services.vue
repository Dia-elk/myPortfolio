<template>
    <div>
        <Head>
            <title>Services of Dia El keantaoui</title>
            <meta name="description" content="Explore the comprehensive services offered by Dia El keantaoui, a talented fullstack developer. From Laravel and Vue.js web development to Flutter mobile app creation, I provide cutting-edge solutions tailored to meet your specific needs." />
        </Head>
        <main-layout>
            <Hero>
                Magical Offerings
            </Hero>
            <ServiceSection/>
        </main-layout>

    </div>
</template>

<script setup>

import MainLayout from "@/Layouts/mainLayout.vue";
import {Head} from "@inertiajs/vue3";
import ServiceSection from "@/Sections/ServiceSection.vue";
import Hero from "@/Shared/Hero.vue";
</script>

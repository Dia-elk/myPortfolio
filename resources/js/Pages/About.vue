<template>
    <div>
        <Head>
            <title>About Dia El keantaoui</title>
            <meta name="description" content="Get to know Dia El keantaoui, a skilled fullstack developer specializing in Laravel, Vue.js, and Flutter. Discover my background, interests, and the passion that drives my commitment to delivering innovative web and mobile solutions." />
        </Head>

        <main-layout>
            <Hero>
                Behind the Curtain
            </Hero>
            <AboutSection/>
        </main-layout>

    </div>
</template>

<script setup>

import MainLayout from "@/Layouts/mainLayout.vue";
import {Head} from "@inertiajs/vue3";
import AboutSection from "@/Sections/AboutSection.vue";
import Hero from "@/Shared/Hero.vue";
</script>

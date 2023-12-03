<script setup>

import MainLayout from "@/Layouts/mainLayout.vue";
import HomeSection from "@/Sections/HomeSection.vue";
import {Head} from "@inertiajs/vue3";
import AboutSection from "@/Sections/AboutSection.vue";
import WorkSection from "@/Sections/WorkSection.vue";
import ServiceSection from "@/Sections/ServiceSection.vue";
import ContactSection from "@/Sections/ContactSection.vue";
import {ref} from "vue";



defineProps({
    projects : Array
})
</script>

<template>
    <Head>
        <title>Dia El keantaoui</title>
        <meta name="description" content="Welcome to the portfolio of Dia El keantaoui, a fullstack developer proficient in Laravel, Vue.js, and Flutter. Explore my skills, projects, and learn more about my journey in the world of web and mobile development." />
    </Head>
  <div>
    <main-layout>
        <HomeSection/>
        <AboutSection/>
        <WorkSection :projects="projects"/>
        <ServiceSection/>
        <ContactSection/>
    </main-layout>
  </div>
</template>


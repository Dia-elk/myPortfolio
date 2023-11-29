<template>
    <div>
        <Head>
            <title>Works of Dia El keantaoui</title>
            <meta name="description" content="Browse through the impressive portfolio of Dia El keantaoui, showcasing a diverse range of web and mobile development projects. Experience firsthand the creativity, efficiency, and expertise brought to life in each Laravel, Vue.js, and Flutter creation." />
        </Head>
        <main-layout>
            <Hero>
                My Masterpieces
            </Hero>
            <WorkSection :projects="projects"/>
        </main-layout>
    </div>
</template>

<script setup>

import MainLayout from "@/Layouts/mainLayout.vue";
import {Head} from "@inertiajs/vue3";
import WorkSection from "@/Sections/WorkSection.vue";
import Hero from "@/Shared/Hero.vue";

defineProps({
    projects : Array,
})
</script>


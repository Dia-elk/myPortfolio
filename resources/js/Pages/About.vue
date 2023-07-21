<template>
    <div>
        <Head title="Behind The Curtain"/>
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

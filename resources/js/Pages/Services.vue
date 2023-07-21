<template>
    <div>
        <Head title="Magical Offerings"/>
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

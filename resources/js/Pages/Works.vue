<template>
    <div>
        <Head title="My Masterpieces"/>
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


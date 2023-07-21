<template>
    <div>
        <Head title="Say Hi!"/>
        <main-layout>
            <Hero>
                Say Hi, I Won't Bite
            </Hero>
            <ContactSection/>
        </main-layout>
    </div>
</template>

<script setup>

import MainLayout from "@/Layouts/mainLayout.vue";
import {Head} from "@inertiajs/vue3";
import ContactSection from "@/Sections/ContactSection.vue";
import Hero from "@/Shared/Hero.vue";
</script>

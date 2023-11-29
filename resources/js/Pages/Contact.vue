<template>
    <div>
        <Head>
            <title>Contact Dia El keantaoui</title>
            <meta name="description" content="Connect with Dia El keantaoui, a skilled fullstack developer specializing in Laravel, Vue.js, and Flutter. Reach out for collaborations, inquiries, or simply to discuss your web and mobile development needs. Let's turn your ideas into reality." />
        </Head>
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

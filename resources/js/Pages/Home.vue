<script setup>

import MainLayout from "@/Layouts/mainLayout.vue";
import HomeSection from "@/Sections/HomeSection.vue";
import {Head} from "@inertiajs/vue3";
import AboutSection from "@/Sections/AboutSection.vue";
import WorkSection from "@/Sections/WorkSection.vue";
import ServiceSection from "@/Sections/ServiceSection.vue";
import ContactSection from "@/Sections/ContactSection.vue";
import {ref} from "vue";


let title = ref('Welcome');

function homeTitle(){
    title.value = 'Welcome';
}
function aboutTitle(){
    title.value = 'About';
}
function workTitle(){
    title.value = 'Works';
}

function serviceTitle(){
    title.value = 'Services';
}

function contactTitle(){
    title.value = 'Say Hi!';
}

defineProps({
    projects : Array
})
</script>

<template>
    <Head>
        <title>{{title}}</title>
    </Head>
  <div>
    <main-layout>
        <HomeSection @mouseenter="homeTitle"/>
        <AboutSection @mouseenter="aboutTitle"/>
        <WorkSection @mouseenter="workTitle" :projects="projects"/>
        <ServiceSection @mouseenter="serviceTitle"/>
        <ContactSection @mouseenter="contactTitle"/>
    </main-layout>
  </div>
</template>


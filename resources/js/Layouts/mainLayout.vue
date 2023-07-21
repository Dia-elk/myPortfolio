<template>
    <div class="font-body max-w-[1280px] mx-auto">
        <div class="relative">
            <NavBar class="absolute top-0"/>
            <main>
                <slot/>
            </main>
            <Footer/>
        </div>
    </div>
</template>

<script setup>

import NavBar from "@/Shared/NavBar/NavBar.vue";
import Footer from "@/Shared/Footer.vue";

</script>


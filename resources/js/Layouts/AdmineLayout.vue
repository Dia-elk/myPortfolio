<template>
    <div class="font-body max-w-[1280px] mx-auto">
        <div class="relative">
           <AdmineNavBar/>
            <main>
                <slot/>
            </main>
        </div>
    </div>
</template>

<script setup>

import NavBar from "@/Shared/NavBar/NavBar.vue";
import Footer from "@/Shared/Footer.vue";
import AdmineNavBar from "@/Shared/NavBar/AdmineNavBar.vue";

</script>

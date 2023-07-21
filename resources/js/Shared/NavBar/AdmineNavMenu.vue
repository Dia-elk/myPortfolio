<template>
    <div>
        <nav>
            <ul class="sm:flex sm:space-x-6 md:space-x-10 hidden">
                <NavItem :href="route('dashboard.index')" :active= "$page.url.startsWith('/dashboard')" > Dashboard </NavItem>
                <NavItem href="/projects" :active= "$page.url.startsWith('/projects')" >Projects</NavItem>
                <NavItem href="/contactMe" :active= "$page.url.startsWith('/contactMe')">Contact Me</NavItem>
            </ul>
        </nav>

    </div>
</template>

<script setup>
import NavItem from "@/Shared/NavBar/NavItem.vue";
import Home from "@/Pages/Home.vue";

</script>

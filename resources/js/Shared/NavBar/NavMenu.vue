<template>
    <div>
        <nav>
            <ul class="sm:flex sm:space-x-6 md:space-x-10 hidden">
                <NavItem href="/" :active= "$page.component==='Home'" > Epicenter </NavItem>
                <NavItem href="/Works" :active= "$page.component==='Works'" v-show="$page.props.projects.length">My Masterpieces</NavItem>
                <NavItem href="/Services" :active= "$page.component==='Services'" >Magical Offerings</NavItem>
                <NavItem href="/About" :active= "$page.component==='About'" >Behind the Curtain</NavItem>
                <NavItem href="/Contact" :active= "$page.component==='Contact'" >Say Hi, I Won't Bite</NavItem>
            </ul>
        </nav>

    </div>
</template>

<script setup>
import NavItem from "@/Shared/NavBar/NavItem.vue";
import Home from "@/Pages/Home.vue";

</script>


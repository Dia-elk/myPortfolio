<template>
    <div class="mb-40 px-4 md:px-16 md::mt-0 mt-16"  v-show="page.props.projects.length">
        <!-- content  -->
        <h1 class="text-neutral-800 text-xl sm:text-2xl font-bold tracking-wide">
            Code Symphony:  <br>
            Showcasing My Laravel Marvels
        </h1>
        <!-- end of content  -->

        <!-- Project  -->

        <div class="md:grid-cols-3  grid  mt-10 md:mt-20 gap-4 px-4   md:flex-row flex-col">

            <ProjectCard
                v-for="project in projects "
                :key="project.id"
                :project-title=  "project.title"
                :laravel-skill= "project.laravel_skill"
                :vue-skill= "project.vue_skill"
                :tailwind-skill= "project.tailwind_skill"
                :flutter-skill= "project.flutter_skill"
                :project-description= "project.description"
                :github-link= "project.github_link"
                :project-link= "project.link"
                :project-img = "project.img"
            />

        </div>
        <!-- End of project  -->

    </div>
</template>

<script setup>

import ProjectCard from "@/Shared/projectCard.vue";
import {usePage} from "@inertiajs/vue3";
import {ref} from "vue";

let page = usePage();
let projects = ref(page.props.projects);



</script>

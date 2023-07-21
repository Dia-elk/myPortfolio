<template>
    <Head title="Projects"/>
 <AdmineLayout>

     <div class="flex flex-col items-center px-4 sm:px-20 mx-auto max-w-[1200px] mt-28">

         <div class="flex w-full mb-6 justify-center sm:justify-end">
             <Link :href="route('projects.create')">
                 <Button>Create Post</Button>
             </Link>
         </div>
         <div class="w-full h-full gap-4 grid grid-cols-1 md:grid-cols-3 mb-20"   >

            <div  v-for="project in projects " class="flex flex-col gap-4">
                <ProjectCard

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

                <div class="flex gap-2">


                    <Link class="w-full " :href="route('projects.edit',project.id)">
                        <Button :class="'w-full'">
                           Edit
                        </Button>
                    </Link>



                </div>
            </div>

         </div>
     </div>
 </AdmineLayout>
</template>

<script setup>
import ProjectCard from "@/Shared/projectCard.vue";
import {ref} from "vue";
import {Head, usePage, Link, router} from "@inertiajs/vue3";
import AdmineLayout from "@/Layouts/AdmineLayout.vue";
import Button from "@/Shared/Button.vue";
import ButtonType2 from "@/Shared/ButtonType2.vue";

const page = usePage()
let projects = ref(page.props.projects);

</script>


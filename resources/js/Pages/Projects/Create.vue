<template>
    <Head title="Create Project"/>
    <AdmineLayout>
        <div class="flex gap-4  mx-6">
            <!-- project inputs -->
            <div class="max-w-4xl mx-auto w-full  border border-neutral-300">

                <div class="text-orange-400 font-bold text-xl flex justify-center items-center p-8">
                    Create New Project
                </div>

              <form class="p-6" @submit.prevent="form.post(route('projects.store'))">
                 <div class="flex w-full flex-col mx-auto gap-4 max-w-xl">
                     <!-- Title -->
                     <div class="w-full h-10">
                         <input
                             v-model="form.projectTitle"
                             type="text"
                             class="w-full focus:outline-none focus:ring-0 focus:border-orange-400 placeholder:text-sm  placeholder-neutral-400 h-full rounded-sm bg-transparent border border-neutral-300 px-2 py-1"
                             placeholder="Project Title" />
                     </div>

                     <!-- Description -->
                     <div class="w-full h-36 ">
                         <textarea
                             v-model="form.projectDescription"
                             class="w-full  bg-transparent focus:outline-none focus:ring-0 focus:border-orange-400 placeholder:text-sm  placeholder-neutral-400  h-full rounded-sm border border-neutral-300 px-2 py-1 resize-none"
                             placeholder="Project description"></textarea>
                     </div>

                     <!-- links github and the project link -->
                     <div class="flex sm:flex-row flex-col gap-4">
                         <!-- Github -->
                         <div class="w-full h-10">
                             <input
                                 v-model="form.projectGithub"
                                 type="url"
                                 class="w-full focus:outline-none focus:ring-0 focus:border-orange-400 placeholder:text-sm  placeholder-neutral-400 h-full rounded-sm bg-transparent border border-neutral-300 px-2 py-1"
                                 placeholder="Github" />
                         </div>
                         <!-- Link -->
                         <div class="w-full h-10">
                             <input
                                 v-model="form.projectLink"
                                 type="url"
                                 class="w-full focus:outline-none focus:ring-0 focus:border-orange-400 placeholder:text-sm  placeholder-neutral-400 h-full rounded-sm bg-transparent border border-neutral-300 px-2 py-1"
                                 placeholder="Project Link" />
                         </div>

                     </div>
                     <!-- skills -->
                     <div class="flex flex-col sm:flex-row sm:items-center px-6 sm:px-0  sm:justify-between">
                         <!-- Laravel skill -->
                         <div class="flex gap-2 items-center">
                             <input
                                 class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                 type="checkbox"
                                 v-model="form.laravelSkill"
                             />

                             <p>
                                 Laravel
                             </p>
                         </div>

                         <!-- Vue.js skill -->
                         <div class="flex gap-2 items-center">
                             <input
                                 class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                 type="checkbox"
                                 v-model="form.vueSkill"
                             />

                             <p>
                                 Vue.js
                             </p>
                         </div>

                         <!-- tailwindcss skill -->
                         <div class="flex gap-2 items-center">
                             <input
                                 class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                 type="checkbox"
                                 v-model="form.tailwindSkill"
                             />

                             <p>
                                 TailwindCss
                             </p>
                         </div>

                         <!-- flutter skill -->
                         <div class="flex gap-2 items-center">
                             <input
                                 class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                                 type="checkbox"
                                 v-model="form.flutterSkill"

                             />

                             <p>
                                 Flutter
                             </p>
                         </div>


                     </div>
                     <!-- backgrounds -->

                     <div class="mb-1">
                         <label
                             for="formFile"
                             class="mb-2 inline-block text-neutral-700 "
                         >Project Image</label
                         >
                         <input

                             class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none "
                             type="file"
                             id="formFile"
                             @input="form.projectImg = $event.target.files[0]"

                         />
                     </div>

                 </div>

                 <div class="mt-6 flex justify-center items-center">
                     <button type="submit">
                         <Button>
                             Create Post
                         </Button>
                     </button>
                 </div>
              </form>

            </div>

            <!-- project preview -->

        </div>
    </AdmineLayout>
</template>

<script setup>

import {Head, useForm , Link} from "@inertiajs/vue3";
import AdmineLayout from "@/Layouts/AdmineLayout.vue";
import {ref} from "vue";
import Button from "@/Shared/Button.vue";

let form = useForm({
    projectTitle : ref(''),
    projectDescription : ref(''),
    projectGithub : ref(null),
    projectLink : ref(null),
    laravelSkill : ref(false),
    vueSkill : ref(false),
    tailwindSkill : ref(false),
    flutterSkill : ref(false),
    projectImg : ref()

});


// I'm the latest code
</script>


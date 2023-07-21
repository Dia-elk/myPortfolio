<template>

    <Head title="Dashboard"/>
    <div>

      <AdmineLayout>
         <div class="flex w-full flex-col gap-4 mt-16 px-6">

             <!-- projects and messages overview -->

             <div class=" w-full flex flex-col sm:flex-row gap-4">

                 <!-- projects overview -->
                 <div class="flex flex-col gap-4 w-full">
                     <div class="border border-orange-400 text-orange-400 w-full font-bold text-sm py-2 flex justify-center">
                         Total of project :

                     </div>
                     <div class="border border-orange-400 w-full py-6 flex justify-center">
                         <h1 class="text-2xl font-bold text-orange-400">
                             {{projects.length}}
                         </h1>
                     </div>
                 </div>
                 <!-- messages overview -->
                <div class="flex flex-col gap-4 w-full">
                    <div class="border border-orange-400 font-bold w-full text-orange-400 text-sm py-2 flex justify-center">
                        Total of messages

                    </div>
                    <div class="border border-orange-400 w-full py-6 flex justify-center">
                       <h1 class="text-2xl font-bold text-orange-400">
                           {{ messages.length }}
                       </h1>

                    </div>
                </div>

             </div>

             <!-- end of projects and messages overview -->

             <!-- projects and messages -->
             <div class=" w-full flex flex-col sm:flex-row gap-4">

                 <!-- projects  -->
                 <div class="w-full">
                     <table class="w-full text-left text-sm font-light">
                         <thead class="border-b font-medium dark:border-neutral-500">
                         <tr>
                             <th scope="col" class="px-6 py-4">#</th>
                             <th scope="col" class="px-6 py-4">Title</th>
                             <th scope="col" class="px-6 py-4">Description</th>
                         </tr>
                         </thead>
                         <tbody>
                         <tr class="border-b dark:border-neutral-500" v-show="page.props.projects.length" v-for="project in projects" :key="project.id">
                             <td class="whitespace-nowrap px-6 py-4 font-medium">{{project.id}}</td>
                             <td class="whitespace-nowrap px-6 py-4">{{project.title}}</td>
                             <td class="whitespace-nowrap px-6 py-4 overflow-hidden">{{project.description}}</td>

                         </tr>
                         <tr class="border-b dark:border-neutral-500" v-show="!page.props.projects.length">
                             <td class="whitespace-nowrap px-6 py-4 font-medium">-</td>
                             <td class="whitespace-nowrap px-6 py-4">-</td>
                             <td class="whitespace-nowrap px-6 py-4">-</td>

                         </tr>
                         </tbody>
                     </table>


                 </div>

                 <div class="sm:w-[1px] w-full h-[1px] sm:h-full bg-orange-400 ">

                 </div>

                 <!-- contacts  -->

                 <div class="w-full">
                     <table class="w-full text-left text-sm font-light">
                         <thead class="border-b font-medium dark:border-neutral-500">
                         <tr>
                             <th scope="col" class="px-6 py-4">Created at</th>
                             <th scope="col" class="px-6 py-4">name</th>
                             <th scope="col" class="px-6 py-4">email</th>
                         </tr>
                         </thead>
                         <tbody>
                         <tr class="border-b dark:border-neutral-500" v-show="messages.length" v-for="message in messages" :key="message.id">
                             <td class="whitespace-nowrap px-6 py-4 font-medium">{{message.created_at}}</td>
                             <td class="whitespace-nowrap px-6 py-4">{{message.name}}</td>
                             <td class="whitespace-nowrap px-6 py-4">{{message.email}}</td>
                         </tr>
                         <tr class="border-b dark:border-neutral-500" v-show="!messages.length">
                             <td class="whitespace-nowrap px-6 py-4 font-medium">-</td>
                             <td class="whitespace-nowrap px-6 py-4">-</td>
                             <td class="whitespace-nowrap px-6 py-4">-</td>

                         </tr>
                         </tbody>
                     </table>

                 </div>


             </div>
             <!--End of projects and contact -->
         </div>
      </AdmineLayout>



    </div>
</template>

<script setup>

import Button from "@/Shared/Button.vue";
import {Link, Head, usePage} from "@inertiajs/vue3";
import AdmineLayout from "@/Layouts/AdmineLayout.vue";

let page = usePage();
let projects = page.props.projects;

defineProps({
    messages : Array,
})


</script>



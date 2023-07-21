<template>
    <Head title="Register"/>
    <div  class="h-screen flex flex-col gap-10 max-w-xl justify-center items-center  font-body bg-transparent mx-auto relative">

        <!-- logo -->
        <div>

        </div>
        <!-- end of logo -->
        <div class=" w-full" >

            <form class="w-full px-20" @submit.prevent="form.post(route('register.store'))">
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-bold text-orange-400 dark:text-white">Your name :</label>
                    <input type="name" id="name" v-model="form.name" class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-orange-400  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name" required>
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-bold text-orange-400 dark:text-white">Your email :</label>
                    <input type="email" id="email" v-model="form.email" class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-orange-400  block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-bold text-orange-400 dark:text-white">Your password :</label>
                    <input type="password" v-model="form.password" id="password" class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-orange-400 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password" required>
                </div>

                <button type="submit" v-show="!form.processing" :disabled="form.processing" class="text-white bg-orange-400 transition-all duration-500 hover:bg-orange-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full  px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Log In</button>
                <div class="flex justify-center">
                    <Spinner
                        v-show="form.processing"
                    />
                </div>

            </form>







        </div>

    </div>

    <div class="flex justify-center">
        <div class=" text-center text-neutral-400 text-[6px] sm:text-xs font-normal tracking-wide absolute bottom-3">© DIA - All rights reserved. Unauthorized code replication is punishable by spontaneous dance parties.</div>
    </div>
</template>
<script setup>
import {Head, useForm} from "@inertiajs/vue3";
import Button from "@/Shared/Button.vue";
import Spinner from "@/Shared/Spinner.vue";
import {ref} from "vue";


let form = useForm({
    email:ref(),
    name:ref(),
    password:ref(),
})

</script>

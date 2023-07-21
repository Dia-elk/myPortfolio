<template>
    <Head title="Login"/>
    <div  class="h-screen flex flex-col gap-10 max-w-xl justify-center items-center  font-body bg-transparent mx-auto relative">

        <!-- logo -->
        <div>
            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M40.337 24.0472C40.3537 24.3634 40.3606 24.6792 40.3606 25C40.3606 35.4597 31.8805 43.9398 21.4213 43.9398C10.962 43.9398 2.48145 35.4597 2.48145 25C2.48145 14.5403 10.9615 6.06018 21.4213 6.06018C29.6259 6.06018 36.6125 11.2782 39.2453 18.5759" stroke="#F39530" stroke-width="0.6" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M39.1713 21.3042C39.174 21.0883 39.2613 20.8821 39.4144 20.73C39.5676 20.5779 39.7744 20.4919 39.9903 20.4907C40.0988 20.4889 40.2066 20.5093 40.307 20.5508C40.4073 20.5923 40.4981 20.654 40.5736 20.732C40.6518 20.8062 40.7136 20.8959 40.7552 20.9954C40.7967 21.0949 40.817 21.2019 40.8148 21.3097C40.8167 21.4183 40.7962 21.5261 40.7547 21.6264C40.7133 21.7268 40.6516 21.8175 40.5736 21.8931C40.4993 21.9712 40.4096 22.033 40.3101 22.0745C40.2106 22.116 40.1036 22.1364 39.9958 22.1343C39.887 22.1344 39.7793 22.113 39.6789 22.0712C39.5784 22.0295 39.4872 21.9683 39.4105 21.8911C39.3339 21.8139 39.2733 21.7223 39.2322 21.6216C39.1911 21.5208 39.1704 21.413 39.1713 21.3042Z" fill="#F39530"/>
                <path d="M33.2079 26.4446C33.2079 25.9048 33.3171 25.4325 33.5356 25.0277C33.7541 24.6165 34.0529 24.3016 34.432 24.0831C34.8175 23.8582 35.2513 23.7458 35.7332 23.7458C36.1958 23.7458 36.6135 23.8582 36.9862 24.0831C37.3589 24.308 37.632 24.6004 37.8055 24.9602V21.953H38.4802V29.0855H37.8055V27.9096C37.6448 28.2759 37.3814 28.5779 37.0151 28.8157C36.6488 29.047 36.2183 29.1626 35.7235 29.1626C35.2416 29.1626 34.8079 29.0502 34.4223 28.8253C34.0432 28.6004 33.7444 28.2823 33.526 27.8711C33.3139 27.4598 33.2079 26.9843 33.2079 26.4446ZM37.8055 26.4542C37.8055 26.0301 37.7187 25.6574 37.5452 25.3361C37.3717 25.0149 37.134 24.7675 36.832 24.594C36.5364 24.4205 36.2087 24.3337 35.8488 24.3337C35.4762 24.3337 35.142 24.4173 34.8464 24.5843C34.5509 24.7514 34.3163 24.9956 34.1428 25.3169C33.9758 25.6317 33.8922 26.0076 33.8922 26.4446C33.8922 26.8751 33.9758 27.2542 34.1428 27.5819C34.3163 27.9032 34.5509 28.1506 34.8464 28.3241C35.142 28.4912 35.4762 28.5747 35.8488 28.5747C36.2087 28.5747 36.5364 28.4879 36.832 28.3144C37.134 28.141 37.3717 27.8936 37.5452 27.5723C37.7187 27.251 37.8055 26.8783 37.8055 26.4542Z" fill="#F39530"/>
                <path d="M41.9146 26.4446C41.9146 25.9048 42.0206 25.4325 42.2327 25.0277C42.4511 24.6165 42.7499 24.3016 43.129 24.0831C43.5146 23.8582 43.9483 23.7458 44.4303 23.7458C44.9315 23.7458 45.362 23.8614 45.7218 24.0928C46.0881 24.3241 46.3515 24.6197 46.5122 24.9795V23.8229H47.1869V29.0855H46.5122V27.9193C46.3451 28.2791 46.0784 28.5779 45.7122 28.8157C45.3523 29.047 44.9218 29.1626 44.4206 29.1626C43.9451 29.1626 43.5146 29.0502 43.129 28.8253C42.7499 28.6004 42.4511 28.2823 42.2327 27.8711C42.0206 27.4598 41.9146 26.9843 41.9146 26.4446ZM46.5122 26.4542C46.5122 26.0301 46.4254 25.6574 46.2519 25.3361C46.0784 25.0149 45.8407 24.7675 45.5387 24.594C45.2431 24.4205 44.9154 24.3337 44.5556 24.3337C44.1829 24.3337 43.8487 24.4173 43.5531 24.5843C43.2576 24.7514 43.023 24.9956 42.8495 25.3169C42.6825 25.6317 42.5989 26.0076 42.5989 26.4446C42.5989 26.8751 42.6825 27.2542 42.8495 27.5819C43.023 27.9032 43.2576 28.1506 43.5531 28.3241C43.8487 28.4912 44.1829 28.5747 44.5556 28.5747C44.9154 28.5747 45.2431 28.4879 45.5387 28.3144C45.8407 28.141 46.0784 27.8936 46.2519 27.5723C46.4254 27.251 46.5122 26.8783 46.5122 26.4542Z" fill="#F39530"/>
            </svg>
        </div>
        <!-- end of logo -->
        <div class=" w-full" >

            <form class="w-full px-20" @submit.prevent="LogUserIn">
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-bold text-orange-400">Your email :</label>
                    <input type="email" id="email" v-model="form.email" class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-orange-400  block w-full p-2.5    " placeholder="name@flowbite.com" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-bold text-orange-400 ">Your password :</label>
                    <input type="password" v-model="form.password" id="password" class="bg-transparent border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 focus:border-orange-400 block w-full p-2.5    " required>
                </div>

                <button type="submit" v-show="!form.processing" :disabled="form.processing" class="text-white bg-orange-400 transition-all duration-500 hover:bg-orange-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full  px-5 py-2.5 text-center ">Log In</button>
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

import {Head, Link, useForm} from "@inertiajs/vue3";
import Button from "@/Shared/Button.vue";
import Spinner from "@/Shared/Spinner.vue";
import {ref} from "vue";

let form = useForm({
    email:ref(''),
    password:ref(''),
    }
);

function LogUserIn(){

    form.post(route('login.store'));

}

</script>

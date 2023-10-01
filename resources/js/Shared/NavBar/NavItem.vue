<template>

       <Link >
           <p class="transition-all duration-600 hover:text-orange-400" :class='active? activeNavItem:notActiveNavItem'>
               <slot/>
           </p>
       </Link>




</template>

<script setup>
import {Link} from "@inertiajs/vue3";
defineProps({
    active : Boolean,

})
let activeNavItem = "text-orange-400 sm:text-[10px] md:text-[12px] font-bold ";
let notActiveNavItem = "text-neutral-400 sm:text-[10px] md:text-[12px] font-medium "


</script>


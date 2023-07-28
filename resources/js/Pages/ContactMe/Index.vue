<template>
    <Head title="Dashboard"/>
   <AdmineLayout>
       <div class=" flex w-full flex-col items-center px-4 smpx-20 mx-auto  sm:m-12">
           <div class="flex w-full">
               <h1 class="mb-10 text-xl font-bold text-orange-400">
                   Messages :
               </h1>
           </div>
           <ContactsTable
           :contacts="messages"
           />

       </div>
   </AdmineLayout>
</template>

<script setup>
import AdmineLayout from "@/Layouts/AdmineLayout.vue";
import {Head} from "@inertiajs/vue3";
import ContactsTable from "@/Shared/ContactsTable.vue";

defineProps({
    messages : Array
})

</script>


<template>
    <div class="flex flex-col w-full">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">#</th>
                            <th scope="col" class="px-6 py-4">Name</th>
                            <th scope="col" class="px-6 py-4">Email</th>
                            <th scope="col" class="px-6 py-4">ToP</th>
                            <th scope="col" class="px-6 py-4">Budget</th>
                            <th scope="col" class="px-6 py-4">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-show="!contacts.length" class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">-</td>
                            <td class="whitespace-nowrap px-6 py-4">-</td>
                            <td class="whitespace-nowrap px-6 py-4">-</td>
                            <td class="whitespace-nowrap px-6 py-4">-</td>
                            <td class="whitespace-nowrap px-6 py-4">-</td>
                            <td class="whitespace-nowrap px-6 py-4">-</td>
                        </tr>
                        <tr v-show="contacts.length" class="border-b dark:border-neutral-500" v-for="contact in contacts" :key="contact.id">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{contact.id===null?  '-' : contact.id}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{contact.name=== null ?  '-' : contact.name}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{contact.email}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{contact.typeOfProject===null?  '-' : contact.typeOfProject}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{contact.budget===null?  '-' : contact.budget}}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{contact.details===null?  '-' : contact.details}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>

defineProps({
    contacts : Array
})

</script>


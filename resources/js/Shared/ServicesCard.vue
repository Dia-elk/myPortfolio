<template>
    <div class="w-full px-10 h-80 border border-neutral-300 flex flex-col justify-center items-center gap-6">

        <!-- icon -->
        <slot name="icon"></slot>

        <!-- end of icon -->

        <h1 class="text-neutral-800 text-base font-medium tracking-wide">
            <slot name="title"></slot>
        </h1>

        <p class="text-center text-neutral-400 text-xs font-normal leading-tight tracking-wide">
            <slot name="description"></slot>
        </p>

    </div>
</template>

<script setup>

</script>


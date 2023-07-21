<template>
    <div class="h-[calc(100vh-80px)] w-full flex justify-center items-center relative" @mouseleave="swipeToggle">

       <div>
           <div class="w-10 md:w-20 h-1 md:h-2 rounded-full bg-orange-400"></div>
           <h1 class="text-orange-400 text-center text-[30px] md:text-[80px] font-bold">
               <slot/>
           </h1>
           <div class="flex justify-end">
               <div class="w-10 md:w-20 h-1 md:h-2 rounded-full bg-orange-400"></div>
           </div>
       </div>

        <div class="absolute bottom-0"  >
            <svg width="1" height="236" viewBox="0 0 1 236" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="0.5" y1="-2.18557e-08" x2="0.50001" y2="236" stroke="url(#paint0_linear_76_371)"/>
                <defs>
                    <linearGradient id="paint0_linear_76_371" x1="0" y1="0" x2="4.32152e-05" y2="236" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#F39530"/>
                        <stop offset="0.979167" stop-color="#F39530" stop-opacity="0"/>
                        <stop offset="1" stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>


        </div>

    </div>
</template>

<script setup>





</script>


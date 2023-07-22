<template>
    <div class=" h-screen md:h-[calc(100vh-80px)] flex flex-col-reverse sm:mt-O mt-28 md:flex-row sm:justify-between items-center px-4 md:px-16 ">

        <!-- content  -->
        <div class="flex flex-col mt-4 ">
            <h1 class="text-neutral-800 text-xl sm:text-2xl font-bold tracking-wide">
                The Architect of Bytes: <br>
                Unveiling the Mind Behind the Code
            </h1>
            <p class="md:max-w-[600px] px-4 md:text-sm text-neutral-400 text-xs font-normal leading-loose tracking-wide mt-5 ">
                Welcome to my digital realm! I am <span class="text-orange-400 text-sm font-bold leading-loose tracking-wide">$name</span> ,
                a creator of captivating digital experiences. With expertise in <span class="text-orange-400 text-sm font-bold leading-loose tracking-wide">$skills[0]</span> ,
                <span class="text-orange-400 text-sm font-bold leading-loose tracking-wide">$skills[1]</span> , and <span class="text-orange-400 text-sm font-bold leading-loose tracking-wide">$skills[2]</span> , I fuse innovation and imagination to craft extraordinary
                mobile apps and web solutions. Join me on a journey of innovation and
                let's bring your ideas to life in a realm where creativity knows no bounds.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 items-center">

               <a href="/Contact" >
                   <Button >Ready to Laugh and Code?</Button>
               </a>

                <ButtonType2 @click="downloadPdf">Get the Inside Scoop</ButtonType2>
            </div>

        </div>
        <!-- end of content  -->

        <!-- picture  -->
        <div class="flex flex-col items-center">


            <!-- Variables name and skills  -->
            <div>
                <p>
                    <span class="text-orange-400 text-xs font-semibold tracking-wide">$skills </span>
                    <span class="text-neutral-800 text-xs font-semibold tracking-wide">= [ </span>
                    <span class="text-lime-700 text-xs font-semibold tracking-wide">“ Flutter “</span>
                    <span class="text-orange-400 text-xs font-semibold tracking-wide">,</span>
                    <span class="text-lime-700 text-xs font-semibold tracking-wide">“ Laravel “ </span>
                    <span class="text-orange-400 text-xs font-semibold tracking-wide">,</span>
                    <span  class="text-lime-700 text-xs font-semibold tracking-wide">“ Vue.js “ </span>
                    <span class="text-neutral-800 text-xs font-semibold tracking-wide">]</span>
                    <span class="text-orange-400 text-xs font-semibold tracking-wide"> ;</span>
                </p>

                <p>
                    <span class="text-orange-400  text-xs font-semibold tracking-wide">$name </span>
                    <span class="text-neutral-800  text-xs font-semibold tracking-wide">= </span>
                    <span class="text-lime-700  text-xs font-semibold tracking-wide">“ EL KEANTAOUI DIAEDDINE “</span>
                    <span class="text-orange-400 text-xs font-semibold tracking-wide"> ;</span>
                </p>
            </div>

            <!-- End of Variables name and skills  -->


          <img class="md:h-[200px] lg:h-[400px]" src="images/php.png">

        </div>
        <!-- end of picture  -->
    </div>
</template>

<script setup>

import Button from "@/Shared/Button.vue";
import ButtonType2 from "@/Shared/ButtonType2.vue";


const downloadPdf = () => {
    const pdfUrl = 'images/resume.pdf';

    const link = document.createElement('a');
    link.href = pdfUrl;
    link.target = '_blank';
    link.download = 'resume.pdf';
    link.dispatchEvent(new MouseEvent('click'));
};
</script>


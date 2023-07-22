<template>
    <div class="flex flex-col px-4">
        <!-- title  -->
        <h1 class="text-neutral-800 text-xl sm:text-2xl mt-16 sm:mt-0 font-bold tracking-wide">
            Unlocking Web/Mobile Magic:  <br>
            Empowering Your Online Presence
        </h1>
        <!-- end of title  -->

        <div class="mt-24">

            <!-- services -->

            <div class="flex flex-col md:flex-row gap-6 mx-2 justify-center items-center ">
                <ServicesCard>
                    <template v-slot:icon>
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="25" fill="#F39530"/>
                            <path d="M34.81 16.9401C33.27 20.7801 29.41 26.0001 26.18 28.5901L24.21 30.1701C23.96 30.3501 23.71 30.5101 23.43 30.6201C23.43 30.4401 23.42 30.2401 23.39 30.0501C23.28 29.2101 22.9 28.4301 22.23 27.7601C21.55 27.0801 20.72 26.6801 19.87 26.5701C19.67 26.5601 19.47 26.5401 19.27 26.5601C19.38 26.2501 19.55 25.9601 19.76 25.7201L21.32 23.7501C23.9 20.5201 29.14 16.6401 32.97 15.1101C33.56 14.8901 34.13 15.0501 34.49 15.4201C34.87 15.7901 35.05 16.3601 34.81 16.9401Z" stroke="#F7F7F7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M27.24 27.47C27.24 24.86 25.12 22.74 22.51 22.74M23.43 30.62C23.43 31.72 23.01 32.77 22.22 33.57C21.61 34.18 20.78 34.6 19.79 34.73L17.33 35C15.99 35.15 14.84 34.01 15 32.65L15.27 30.19C15.51 28 17.34 26.6 19.28 26.56C19.48 26.55 19.69 26.56 19.88 26.57C20.73 26.68 21.56 27.07 22.24 27.76C22.91 28.43 23.29 29.21 23.4 30.05C23.41 30.24 23.43 30.43 23.43 30.62Z" stroke="#F7F7F7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M26.4699 33.8701C27.9399 35.3401 29.4299 35.3401 30.8999 33.8701L33.8599 30.9101C35.3499 29.4201 35.3499 27.9501 33.8599 26.4601L33.1199 25.7301L30.1599 28.6801M16.1099 23.5101C14.6399 22.0201 14.6399 20.5501 16.1099 19.0601L19.0699 16.1001C20.5399 14.6301 22.0299 14.6301 23.4999 16.1001L24.2399 16.8401M24.2499 16.8501L20.5499 20.5501" stroke="#F7F7F7" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </template>
                    <template v-slot:title>
                        UX/UI Design
                    </template>
                    <template v-slot:description>
                        Get Ready for a Ux/Ui Design Extravaganza! We'll
                        Craft Interfaces So Gorgeous, Users Will Be Left
                        Wondering If They're in a Digital Spa.
                    </template>
                </ServicesCard>


                <ServicesCard>
                    <template v-slot:icon>
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="25" fill="#F39530"/>
                            <path d="M19.89 22C20.87 22.49 21.71 23.23 22.32 24.15C22.67 24.67 22.67 25.34 22.32 25.86C21.71 26.77 20.87 27.51 19.89 28M26 28H30" stroke="#F7F7F7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22 35H28C33 35 35 33 35 28V22C35 17 33 15 28 15H22C17 15 15 17 15 22V28C15 33 17 35 22 35Z" stroke="#F7F7F7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </template>
                    <template v-slot:title>
                        Web Development
                    </template>
                    <template v-slot:description>
                        Welcome to My Web Development Wonderland!
                        My Websites Are So Good,
                        They'll Make Your Competitors
                        Green with Code Envy.
                    </template>
                </ServicesCard>


                <ServicesCard>
                    <template v-slot:icon>
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="25" fill="#F39530"/>
                            <path d="M24 31V34C24 34.5 23.6 35 23 35C22.4 35 22 34.5 22 34V31M24 31H22M24 31H26M22 31H28M22 31C20.9 31 20 30.1 20 29V24C20 22.9 20.9 22 22 22H28C29.1 22 30 22.9 30 24V29C30 30.1 29.1 31 28 31M28 31V34C28 34.5 27.6 35 27 35C26.4 35 26 34.5 26 34V31M28 31H26M18 24V28C18 28.6 17.6 29 17 29C16.4 29 16 28.6 16 28V24C16 23.4 16.4 23 17 23C17.6 23 18 23.4 18 24ZM34 24V28C34 28.6 33.6 29 33 29C32.4 29 32 28.6 32 28V24C32 23.4 32.4 23 33 23C33.6 23 34 23.4 34 24ZM22.6 20H27.4C28.3 20 29 19.25 29 18.286C29 15.929 27.2 14 25 14C22.8 14 21 15.929 21 18.286C21 19.25 21.7 20 22.6 20Z" stroke="#F7F7F7" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </template>
                    <template v-slot:title>
                        Mobile Development
                    </template>
                    <template v-slot:description>
                        Strap on Your Seatbelts for a Thrilling Mobile Development
                        Adventure. My Apps Will Be So Hot, Users Will Want
                        to Swear Allegiance to Their Screens!
                    </template>
                </ServicesCard>



            </div>

            <!-- end of services -->

            <!-- call to action -->
            <div class="mt-16 flex justify-center items-center">
                <a href="/Contact" >
                <Button >Elevate Your Digital Game</Button>
                </a>
            </div>
            <!-- end of call to action -->

        </div>

    </div>
</template>

<script setup>

import Button from "@/Shared/Button.vue";
import ServicesCard from "@/Shared/ServicesCard.vue";
</script>

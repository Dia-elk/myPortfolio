<template>
    <div class="btn
    relative
    overflow-hidden
    items-center
    justify-center


    h-[46px]
    w-[200px]

    border
    border-orange-400
    bg-orange-400

" @mouseenter="hoverText" @mouseleave="hoverText" @mousemove="updatePosition">
    <span class="cursor-pointer h-full flex justify-center items-center text-xs  text-center transition-all duration-500"
          :class="{'text-orange-400' : isHoverType} , {'text-white' : !isHoverType}">
      <slot/>
    </span >
        <div class="btn-circle-type" :style="circleStyle"></div>
    </div>
</template>

<script setup>
import { ref, reactive } from 'vue';

const xPos = ref(0);
const yPos = ref(0);

const circleStyle = reactive({
    left: 0,
    top: 0,
});

let isHoverType = ref(false);


function hoverText(){
    isHoverType.value = !isHoverType.value
}
function updatePosition(event) {

    xPos.value = event.pageX;
    yPos.value = event.pageY;

    circleStyle.left = `${xPos.value - event.currentTarget.offsetLeft}px`;
    circleStyle.top = `${yPos.value - event.currentTarget.offsetTop}px`;
}
</script>

<style>


.btn span {
    position: relative;
    z-index: 1;
}


.btn-circle-type {
    content: '';
    position: absolute;
    background-color: #f5f5f5;
    width: 0;
    height: 0;
    left: var(--xPos);
    top: var(--yPos);
    transform: translate(-50%, -50%);
    border-radius: 50%;
    transition: width 0.5s, height 0.5s;
}

.btn:hover .btn-circle-type {
    width: 350px;
    height: 350px;

}
</style>



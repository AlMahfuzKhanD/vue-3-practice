<template>
    <h1>Like count: {{ like }}</h1>
    <button @click="increment">Like</button>
    <button @click="decrement">Dislike</button>
</template>
<script setup>
import { ref } from 'vue'
const like = ref(0)
function increment(){
    like.value++
}
function decrement(){
    like.value--
}
</script>
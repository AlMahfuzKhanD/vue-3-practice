<template>
    <h2>{{ user.name }} is {{ user.age }} years old</h2>
    <button @click="growOlder">Happy Birthday</button>
</template>
<script setup>
import { reactive } from 'vue';
const user = reactive({
    name: 'Mahfuz',
    age: 25
})
function growOlder(){
    user.age++
}
</script>
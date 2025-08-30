<script setup>
import { ref, watchEffect } from 'vue'
const name = ref('Al Mahfuz')
const age = ref(25)

watchEffect(() => {
    console.log(`Name is ${name.value} and age is ${age.value}`)
})
</script>
<template>
    <p>Name: <input v-model="name" /></p>
    <p>Age <input v-model.number="age" /></p>
</template>
<script setup>
import { ref, computed } from 'vue'
const firstName = ref('Al')
const lastName = ref('Mahfuz')
const fullName = computed(() => {
    return firstName.value + ' ' + lastName.value
})
</script>

<template>
    <p>First Name: <input v-model="firstName" /></p>
    <p>Last Name: <input v-model="lastName" /></p>
    <h2>Full Name: {{ fullName }}</h2>
</template>
<script setup>
import { ref, watch } from 'vue'
const count = ref(0)

watch(count, (newValue, oldValue) => {
    console.log(`Count changed from ${oldValue} to ${newValue}`)
})
</script>
<template>
    <p>Count: {{ count }}</p>
    <button @click="count++">Increment</button>
</template>
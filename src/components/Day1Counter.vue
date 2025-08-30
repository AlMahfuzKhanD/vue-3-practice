<template>
  <h1>Hello Vue 3 🚀</h1>
  <p>Counter: {{ count }}</p>
  <button @click="increment">Increment</button>
</template>

<script setup>
import { ref } from 'vue'

// reactive primitive
const count = ref(0)

function increment() {
  count.value++
}
</script>

<style>
h1 {
  color: teal;
}
button {
  margin-top: 10px;
  padding: 5px 10px;
}
</style>

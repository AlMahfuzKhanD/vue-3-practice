<template>
  <div>
    <p>Counter: {{ counter }}</p>
    <button @click="increment">Increment</button>
  </div>
</template>
<script setup>
import { ref } from "vue";
const counter = ref(0);
function increment() {
  counter.value++;
}
</script>

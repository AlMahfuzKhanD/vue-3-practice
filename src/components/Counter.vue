<template>
  <div class="counter-container">
    <p class="counter-text">Counter: {{ counter }}</p>
    <button @click="increment" class="increment-btn">Increment</button>
  </div>
</template>

<script setup>
import { ref } from "vue";

const counter = ref(0);

function increment() {
  counter.value++;
}
</script>

<style scoped>
.counter-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 100px;
}

.counter-text {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 16px;
}

.increment-btn {
  padding: 8px 16px;
  font-size: 16px;
  background-color: #42b883;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>

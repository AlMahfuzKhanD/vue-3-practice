<template>
  <div class="user-card">
    <h2>Hello, {{ user.name }}</h2>
    <p>Age: <input v-model="user.age" type="number" /></p>
    <p>{{ greeting }}</p>
  </div>
</template>
<script setup>
import { reactive, computed, watch } from "vue";

const user = reactive({
  name: "Mahfuz",
  age: 25,
});

const greeting = computed(() => {
  return `Welcome, ${user.name}. You are ${user.age} years old.`;
});

watch(
  () => user.age,
  (newAge, oldAge) => {
    console.log(`User age changed ${oldAge} to ${newAge}`);
  }
);
</script>
<style scoped>
.user-card {
  padding: 20px;
  max-width: 400px;
  margin: 50px auto;
  background: #000;
  border-radius: 8px;
  text-align: center;
}
input {
  width: 80px;
  padding: 4px;
  margin-left: 8px;
}
</style>

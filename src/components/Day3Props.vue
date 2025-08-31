<template>
  <div class="card">
    <h2>{{ name }}</h2>
    <p>Age: {{ age }}</p>
  </div>
</template>

<script setup>
defineProps({
  name: String,
  age: Number
})
</script>

<template>
  <div>
    <h1>Vue 3 Practice Playground</h1>

    <!-- Swap this line depending on what you want to test -->
    <!-- <Day1Counter /> -->
    <!-- <Day1User /> -->
    <!-- <Day1Practice /> -->
    <!-- <Day2Computed /> -->
    <!-- <Day2Watcher /> -->
    <!-- <Day2WatchEffect /> -->
    <!-- <Day2BMI /> -->
    <!-- <Day3Props name="Alice" :age="30" />
    <Day3Props name="Mahfuz" :age="22" /> -->
    <!-- <Day3Emit  @update="handleUpdate"/>
    <p>Latest count: {{ latestCount }}</p> -->
    <Day3Slot>
      <p>This is some content inside the card.</p>
      <button>Click Me</button>
    </Day3Slot>

  </div>
</template>

<script setup>
// import Day2BMI from './components/Day2BMI.vue'
// import Day1Counter from './components/Day1Counter.vue'
// import Day1User from './components/Day1User.vue'
// import Day1Practice from './components/Day1Practice.vue'
// import Day2Computed from './components/Day2Computed.vue'
// import Day2Watcher from './components/Day2Watcher.vue'
// import Day2WatchEffect from './components/Day2WatchEffect.vue'
// import Day2BMI from './components/Day2BMI.vue'
// import Day3Props from './components/Day3Props.vue'
// import Day3Emit from './components/Day3Emit.vue';
// import { ref } from 'vue';
// const latestCount = ref(0);
// function handleUpdate(newValue){
//   latestCount.value = newValue;
// }

import Day3Slot from './components/Day3Slot.vue'
</script>

<script setup>
import { ref, watch, computed } from 'vue'

const weight = ref(0)
const height = ref(0)
const bmiWatch = ref('')
const bmi = computed(() => {
    if (height.value === 0 || weight.value ===0) return 0
    return (weight.value / (height.value * height.value)).toFixed(2)
})

watch(bmi, (newValue, oldValue) => {
    bmiWatch.value = `BMI Updated to ${newValue} from ${oldValue}`
})
</script>
<template>
    <h2>Calculate Your BMI</h2>
    <p>Weight (kg): <input v-model.number="weight" /></p>
    <p>Height (m): <input v-model.number="height" /></p>
    <h2>Your BMI is: {{ bmi }}</h2>
    <h2>{{ bmiWatch }}</h2>
    
</template>
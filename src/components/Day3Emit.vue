<template>
    <div>
        <p>Count: {{ count }}</p>
        <button @click="increase">Increase</button>
    </div>
</template>
<script setup>
import { ref } from 'vue'

const emit = defineEmits(['update'])
const count = ref(0)

function increase(){
    count.value++
    emit('update', count.value)
}
</script>
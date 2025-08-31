<template>
    <div class="todo-app">
        <h2>My To-Do List</h2>

        <!-- Input box with v model-->
         <input v-model="newTodo" placeholder="Add a new task" @keyup.enter="addTodo" />
         <button @click="addTodo">Add</button>

        <!-- Show message if no todos-->
        <p v-if="todos.length === 0">No tasks yet. Add one above</p>
        <!-- List of todos -->
         <ul>
            <li v-for="(todo,index) in todos" :key="index">
                {{ todo }}
                <button @click="removeTodo(index)">Remove</button>
            </li>
         </ul>

    </div>
</template>
<script setup>
import { ref } from 'vue'

//state
const newTodo = ref('')
const todos = ref([])

// add bew todo
function addTodo(){
    if(newTodo.value.trim() !== ''){
        todos.value.push(newTodo.value.trim())
        newTodo.value = ''
    }
}

// remove todo
function removeTodo(index){
    todos.value.splice(index,1)
}
</script>


<style scoped>
.todo-app {
  max-width: 400px;
  margin: auto;
  text-align: center;
}
ul {
  list-style: none;
  padding: 0;
}
li {
  display: flex;
  justify-content: space-between;
  margin: 5px 0;
  padding: 5px;
  border: 1px solid #ddd;
}
</style>
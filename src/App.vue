
  <template>
  <h1>Like {{ likes }}</h1>
  <button @click="like">Like</button>
  <button @click="dislike">dislike</button>
</template>


<script setup>
import {ref} from 'vue'


const likes = ref(0)

function like(){
  likes.value++
}

function dislike(){
  likes.value--
}

</script>
<style>
h1 {
  color:teal
}
button{
  margin-top: 10px;
  padding: 10px 10px;
  background-color:teal;
  color:white;
  border:none;
  border-radius:5px;
  cursor:pointer;
}
</style>
import { defineStore } from 'pinia'

export const useCounterStore = defineStore('counter', {
  state: () => ({
    count: 0            // Initial state 
    }),
    getters: {
        doubleCount: (state) => state.count * 2  // Getter to get double the count
    },
    actions: {
        increment() {
            this.count++
        },
        decrement() {
            this.count--
        }
    }
})
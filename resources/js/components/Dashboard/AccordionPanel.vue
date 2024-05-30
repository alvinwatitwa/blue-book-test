<script setup>
 import { ref } from 'vue';
 import ToDoItem from './ToDo/ToDoItem.vue'

 const props = defineProps({
    title: { type: String, required: true },
    ariaTitle: { type: String, required: true },
    todos: { type: Array, required: true },
  });
  const showPanel = ref(false);
  const togglePanel = (event) => {
    showPanel.value = !showPanel.value;
  }
</script>

<template>
    <div class="container mb-4 border-2 rounded-lg shadow-sm panel">
      <button
        :arial-controls="'accordion-content-' + ariaTitle"
        :id="'accordion-control-' + ariaTitle"
        @click.prevent="togglePanel"
        class="flex flex-row items-center justify-between w-full p-4 font-semibold border-b-2">
        {{ title }}
        <span
          class="material-icons"
          v-if="showPanel">
          expand_more
        </span>
        <span
          class="material-icons"
          v-else>
          chevron_right
        </span>
      </button>
      <div
        :aria-hidden="!showPanel"
        :id="'content-' + ariaTitle"
        class="p-4"
        v-if="showPanel">
        <div class="row">
            <template v-for="todo in todos" :key="todo.id">
                <ToDoItem :todo="todo"  />
            </template>
      </div>
    </div>
    </div>
  </template>

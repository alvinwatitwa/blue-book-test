<script setup>
 import { ref , computed} from 'vue';
 import DOMPurify from 'isomorphic-dompurify';
 import TodoItemStatus from './../../TodoItemStatus.vue'
 import ToDoItemPriority from '../ToDoItemPriority.vue';

 const props = defineProps({
    todo: { type: Array, required: true },
  });

  const sanitizedTodoContent = computed(() => {
  return DOMPurify.sanitize(props.todo.description);
})
</script>

<template>
    <article class="flex flex-col self-stretch p-4 font-medium bg-white rounded-xl border border-gray-100 border-solid leading-[140%] max-w-[954px]">
      <header class="flex justify-between gap-2 max-md:flex-wrap max-md:max-w-full">
        <section>
          <h2 class="text-base text-gray-900">{{ todo.title }}</h2>
          <time class="mt-1 text-xs text-gray-500" datetime="2024-03-25">Mar 25th 2024</time>
        </section>
      </header>

        <div class="mt-2 text-sm text-gray-500 max-md:max-w-full" v-html="sanitizedTodoContent"></div>
      <footer class="flex self-start gap-3 mt-2 text-xs text-gray-900 whitespace-nowrap">
        <div class="flex gap-1 px-1.5 py-1 bg-gray-50 rounded-[99px]">
            <TodoItemStatus :status="todo.status"/>
        </div>
        <div class="flex gap-1 px-1.5 py-1 bg-gray-50 rounded-[99px]">
            <ToDoItemPriority :priority="todo.priority"/>
        </div>
      </footer>
    </article>
  </template>

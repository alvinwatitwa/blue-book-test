<script setup>
const emit = defineEmits(['open']);

function openModal()  {
        emit('open');
    }
</script>

<template>
    <section class="flex justify-between w-full gap-4 mt-6 max-md:flex-wrap max-md:max-w-full">
        <h3 class="text-3xl font-bold text-gray-900">Todos</h3>
        <button @click.prevent="openModal()" class="flex self-start justify-center gap-2 px-4 py-3 text-sm font-medium text-center text-white bg-blue-600 rounded-md" aria-label="Add Todo">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f6c3a46dc413afd7884d924e6bf3f850e4a21dae69202a5b91fb9839615662b7?apiKey=36440029668448b78377e0e215175ca3&" alt="Add" class="w-5 shrink-0 aspect-square" />
          <span>Add Todo</span>
        </button>
    </section>
</template>

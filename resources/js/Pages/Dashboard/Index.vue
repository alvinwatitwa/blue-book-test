<script setup>
    import LayoutAuthenticated from '../../layouts/LayoutAuthenticated.vue';
    import UserInfo from '../../components/Dashboard/UserInfo.vue';
    import AccordionPanel from '../../components/Dashboard/AccordionPanel.vue';
    import ToDo from '../../components/Dashboard/ToDo/ToDo.vue';
    import AddToDo from '../../components/Dashboard/ToDo/AddToDo.vue';
    import { ref } from 'vue'

    const props = defineProps({
        todos: Object,
    })

    const isModalVisible = ref(false);

    function openModal() {
        console.log('open');
      isModalVisible.value = true;
    }

    function closeModal() {
        console.log('close');
      isModalVisible.value = false;
    }
</script>
<template>
    <LayoutAuthenticated>
        <main class="flex justify-center items-center self-stretch px-16 py-6 leading-[140%] max-md:px-5">
    <section class="flex flex-col max-w-full w-[954px]">
        <UserInfo />
        <ToDo @open="openModal"/>
      <section class="flex gap-4 mt-4 text-sm font-medium max-md:flex-wrap">
        <form class="flex gap-2 px-4 py-3 text-center text-gray-400 bg-white border border-gray-300 border-solid rounded-md max-md:flex-wrap">
          <label for="search-todos" class="sr-only">Search todos</label>
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/533fdfaf3e1b22398c2045ee627ea4050b0b962ee06541fa6c9887f3c05f1a40?apiKey=36440029668448b78377e0e215175ca3&" alt="Search icon" class="w-5 shrink-0 aspect-square" />
          <input id="search-todos" type="text" placeholder="Search todos..." aria-label="Search todos" class="flex-grow outline-none" />
        </form>
        <div class="flex flex-col justify-center whitespace-nowrap">
          <div class="flex gap-2 px-4 py-3 bg-white border border-gray-300 border-solid rounded-md">
            <span class="text-gray-500">Status:</span>
            <span class="flex-1 text-gray-900">All</span>
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/dbb5ea6ea133b0460320f2476a7e0004e5c6eb0fc5ea73fcea621b9347e30ba9?apiKey=36440029668448b78377e0e215175ca3&" alt="Status dropdown" class="w-4 my-auto shrink-0 aspect-square" />
          </div>
        </div>
        <div class="flex flex-col justify-center whitespace-nowrap">
          <div class="flex gap-2 px-4 py-3 bg-white border border-gray-300 border-solid rounded-md">
            <span class="text-gray-500">Priority:</span>
            <span class="flex-1 text-gray-900">All</span>
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/dbb5ea6ea133b0460320f2476a7e0004e5c6eb0fc5ea73fcea621b9347e30ba9?apiKey=36440029668448b78377e0e215175ca3&" alt="Priority dropdown" class="w-4 my-auto shrink-0 aspect-square" />
          </div>
        </div>
      </section>
      <section>
        <div class="flex justify-between gap-4 py-3 mt-4 text-xl font-medium text-gray-900 whitespace-nowrap max-md:flex-wrap max-md:max-w-full">
          <h4>Pending</h4>
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9f4f96c4ec92f0d6557b9b36d49a17b2b3cec57272b33d9c80184e983c3adaf5?apiKey=36440029668448b78377e0e215175ca3&" alt="Expand pending items" class="w-5 my-auto shrink-0 aspect-square" />
        </div>
        <div class="h-px mt-4 bg-gray-300 shrink-0 max-md:max-w-full"></div>
        <div class="flex justify-between gap-4 py-3 mt-4 text-xl font-medium text-gray-900 whitespace-nowrap max-md:flex-wrap max-md:max-w-full">
          <h4>Backlog</h4>
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9f4f96c4ec92f0d6557b9b36d49a17b2b3cec57272b33d9c80184e983c3adaf5?apiKey=36440029668448b78377e0e215175ca3&" alt="Expand backlog items" class="w-5 my-auto shrink-0 aspect-square" />
        </div>
        <div class="h-px mt-4 bg-gray-300 shrink-0 max-md:max-w-full"></div>
        <div class="flex justify-between gap-4 py-3 mt-4 text-xl font-medium text-gray-900 whitespace-nowrap max-md:flex-wrap max-md:max-w-full">
          <h4>Complete</h4>
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9f4f96c4ec92f0d6557b9b36d49a17b2b3cec57272b33d9c80184e983c3adaf5?apiKey=36440029668448b78377e0e215175ca3&" alt="Expand complete items" class="w-5 my-auto shrink-0 aspect-square" />
        </div>

        <AccordionPanel
            aria-title="incidents"
            title="Pending"
            :todos="todos">
        </AccordionPanel>

      </section>
    </section>
  </main>
    </LayoutAuthenticated>

    <AddToDo :isVisible="isModalVisible" @close="closeModal()" />
</template>

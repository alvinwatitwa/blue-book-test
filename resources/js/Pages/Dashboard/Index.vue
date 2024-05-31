<script setup>
    import LayoutAuthenticated from '../../layouts/LayoutAuthenticated.vue';
    import UserInfo from '../../components/Dashboard/UserInfo.vue';
    import AccordionPanel from '../../components/Dashboard/AccordionPanel.vue';
    import ToDo from '../../components/Dashboard/ToDo/ToDo.vue';
    import AddToDo from '../../components/Dashboard/ToDo/AddToDo.vue';
    import { ref, computed } from 'vue';
    import ToDoItem from '../../components/Dashboard/ToDo/ToDoItem.vue';

    const props = defineProps({
        todos: Object,
        statuses: Array,
        priorities: Array,
        counts: Object,
        auth: Object
    });

    const isSearching = ref(false);
    const isModalVisible = ref(false);
    const searchQuery = ref('');
    const searchedTodos =  ref([]);
    const status = ref('');
    const priority = ref('');

    function openModal() {
      isModalVisible.value = true;
    }

    function closeModal() {
      isModalVisible.value = false;
    }

    function filterTodoByStatus(status){
        let filteredTodos = props.todos

        filteredTodos = filteredTodos.filter((item) => {
        return (item.status_id == status.id)
        })

        return filteredTodos;
    }

    function filteredRecords() {
        if(searchQuery.value.length > 0) {
            isSearching.value = true;
            searchedTodos.value = props.todos.filter(item => {
                return item.title.toLowerCase().includes(searchQuery.value.toLowerCase())
            })
        }else{
            isSearching.value = false;
        }
    }
    function statusChange() {
            status.value == '' ? isSearching.value  = false : isSearching.value = true;

            if(isSearching.value){
                searchedTodos.value = props.todos.filter(item => {
                    return item.status_id == status.value
                })
            }
    }

    function priorityChange() {
            priority.value == '' ? isSearching.value  = false : isSearching.value = true;

            if(isSearching.value){
                searchedTodos.value = props.todos.filter(item => {
                    return item.priority_id == priority.value
                })
            }
    }
</script>
<template>
    <LayoutAuthenticated :user="auth">
        <main class="flex justify-center items-center self-stretch px-16 py-6 leading-[140%] max-md:px-5">
        <section class="flex flex-col max-w-full w-[954px]">
        <UserInfo :counts="counts" :user="auth"/>
        <ToDo @open="openModal"/>
        <section class="flex gap-4 mt-4 text-sm font-medium max-md:flex-wrap">
            <form class="flex gap-2 px-4 py-3 text-center text-gray-400 bg-white border border-gray-300 border-solid rounded-md max-md:flex-wrap">
            <label for="search-todos" class="sr-only">Search todos</label>
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/533fdfaf3e1b22398c2045ee627ea4050b0b962ee06541fa6c9887f3c05f1a40?apiKey=36440029668448b78377e0e215175ca3&" alt="Search icon" class="w-5 shrink-0 aspect-square" />
            <input id="search-todos" type="text" placeholder="Search todos..." v-model="searchQuery" @keyup.prevent="filteredRecords()" aria-label="Search todos" class="flex-grow outline-none" />
            </form>
            <div class="flex flex-col justify-center whitespace-nowrap">
                <div class="flex gap-2 px-4 py-3 bg-white border border-gray-300 border-solid rounded-md">
                    <select id="priority" class="w-full bg-transparent focus:outline-none" v-model="status" @change="statusChange()">
                        <option value="" selected>Status: All</option>
                        <option v-for="status in statuses" :key="status" :value="status.id">{{status.name}}</option>
                      </select>
                </div>
            </div>
            <div class="flex flex-col justify-center whitespace-nowrap">
            <div class="flex gap-2 px-4 py-3 bg-white border border-gray-300 border-solid rounded-md">
                <select id="priority" class="w-full bg-transparent focus:outline-none" v-model="priority" @change="priorityChange()">
                    <option value="" selected>Priority: All </option>
                    <option v-for="priority in priorities" :key="priority.id" :value="priority.id">{{priority.name}}</option>
                  </select>
            </div>
            </div>
        </section>
        <section v-if="!isSearching" class="mt-4">
            <template v-for="status in statuses" :key="status.id">
                <AccordionPanel
                    aria-title="incidents"
                    :title="status.name"
                    :todos="filterTodoByStatus(status)">
                </AccordionPanel>
            </template>
        </section>
        <section v-if="isSearching" class="mt-4">
            <template v-for="todo in searchedTodos" :key="todo.id">
                <ToDoItem :todo="todo"/>
            </template>
        </section>
    </section>
  </main>
    </LayoutAuthenticated>

    <AddToDo :isVisible="isModalVisible" :statuses="statuses" :priorities="priorities" @close="closeModal()" />
</template>

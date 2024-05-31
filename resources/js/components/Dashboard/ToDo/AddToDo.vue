<script setup>
  import { RichTextEditorComponent as EjsRichtexteditor,Toolbar,Link,Image,HtmlEditor } from "@syncfusion/ej2-vue-richtexteditor";
  import { provide,ref } from "vue";
  import {useForm} from "@inertiajs/inertia-vue3";
  import Swal from 'sweetalert2';

const rteInstance = ref(null);
const value = ref("<p>The Rich text.</p>");

const richtexteditor =  [Toolbar, Link, Image, HtmlEditor];
provide('richtexteditor', richtexteditor);
    const props = defineProps({
        isVisible: Boolean,
        statuses: Array,
        priorities: Array,
    })
    const emit = defineEmits(['close'])

    const todo = ref({
        title: '',
        description: '',
        status_id: '',
        priority_id: ''
    });

    function closeModal() {
        console.log(props.isVisible);
        emit('close');
    }

    function createTodo() {

    const form = useForm({
        title: todo.value.title,
        description: todo.value.description,
        status_id: todo.value.status_id,
        priority_id: todo.value.priority_id,
        user_id: 1
    });

    form.post(route('todos.store'), {
        onSuccess: () => {
            closeModal();
            Swal.fire({
                    title: 'Todo Created',
                    text: 'Todo successfully created',
                    icon: 'success'
                });
        }
    });
}

</script>

<template>
 <div v-if="isVisible" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50">
    <div class="w-1/2 p-4 bg-white rounded-lg shadow-lg">
      <div class="flex items-center justify-between pb-2">
        <h3 class="text-xl font-semibold">New Todo</h3>
        <button @click="closeModal()" class="text-gray-500 hover:text-gray-700">&times;</button>
      </div>
      <div class="pb-4">
        <form class="flex flex-col w-full p-4">
      <section class="flex gap-3 text-sm leading-5 text-gray-900">
        <div class="flex flex-col flex-1">
          <label for="status" class="text-left sr-only">Status</label>
          <div>Status</div>
          <div class="flex justify-between gap-2 px-4 py-3 mt-1 bg-white border border-gray-300 border-solid rounded-md">
            <select id="status" class="w-full bg-transparent focus:outline-none" v-model="todo.status_id">
              <option value="" disabled selected>Select status</option>
              <option v-for="status in statuses" :key="status.id" :value="status.id">{{status.name}}</option>
            </select>
          </div>
        </div>
        <div class="flex flex-col flex-1">
          <label for="priority" class="text-left sr-only">Priority</label>
          <div>Priority</div>
          <div class="flex justify-between gap-2 px-4 py-3 mt-1 bg-white border border-gray-300 border-solid rounded-md">
            <select id="priority" class="w-full bg-transparent focus:outline-none" v-model="todo.priority_id">
              <option value="" disabled selected>Select priority</option>
              <option v-for="priority in priorities" :key="priority.id" :value="priority.id">{{priority.name}}</option>
            </select>
          </div>
        </div>
      </section>
      <section class="mt-3 text-sm leading-5 text-gray-900">
        <label for="title" class="text-left sr-only">Todo Title</label>
        <div>Todo Title</div>
        <input id="title" type="text"  v-model="todo.title" class="w-full mt-1 bg-white border border-gray-300 border-solid rounded-md shrink-0 h-11" />
      </section>
      <section class="mt-3 text-sm leading-5 text-gray-900">
        <label for="description" class="text-left sr-only">Todo Description</label>
        <div>Todo Description</div>
        <div class="default-section">
                <ejs-richtexteditor v-model="todo.description" id="default" ref="rteInstance" v-bind:value="value"></ejs-richtexteditor>
        </div>
      </section>
    </form>
      </div>
      <div class="flex justify-end gap-3 py-3 pt-2 text-sm font-medium leading-5 text-center">
        <button type="button" @click="closeModal()" class="justify-center px-4 py-3 text-gray-900 bg-gray-100 rounded-md whitespace-nowrap"> Cancel </button>
        <button type="submit"  @click.prevent="createTodo()" class="justify-center px-4 py-3 text-white bg-blue-600 rounded-md"> Create Todo </button>
      </div>
    </div>
  </div>
  </template>

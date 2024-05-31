<script setup>
    import Layout from '../../layouts/Layout.vue';
    import { provide,ref } from "vue";
    import {useForm} from "@inertiajs/inertia-vue3";
    import Swal from 'sweetalert2'

    defineProps({ errors: Object });

    const user = ref({
        name: '',
        email: '',
        password: '',
        confirm_password: '',
    });

    function register() {
        const form = useForm({
            name: user.value.name,
            email: user.value.email,
            password: user.value.password,
            password_confirmation: user.value.confirm_password
        });

        form.post(route('user.register'), {
            onSuccess: () => {
                Swal.fire({
                        position: "top-end",
                        title: 'Registration Successfull',
                        text: 'You have successfully registered',
                        icon: 'success'
                    }).then(() => {
                        // location.reload();
                    });
            }
        });
}
</script>

<template>
    <Layout>
        <div class="flex flex-col pb-20 bg-white">
            <main class="flex flex-col self-center p-6 mt-44 max-w-full bg-white rounded-xl border border-gray-300 border-solid w-[500px] max-md:px-5 max-md:mt-10">
            <section>
                <div class="flex gap-3 max-md:flex-wrap">
                <div class="flex justify-center items-center px-4 py-3 w-11 h-11 bg-gray-100 rounded-[999px]">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5b41eb9f9eb88da38bafbdfcd616a9dada6653c5d5764e50b5ca2afecc149e9e?apiKey=36440029668448b78377e0e215175ca3&" alt="" class="w-5 aspect-square" />
                </div>
                <div class="flex-1 my-auto text-2xl font-semibold leading-8 text-gray-900">Register using your email</div>
                </div>
                <form class="mt-4">
                <label for="name" class="block mt-4 text-lg leading-6 text-left text-gray-900 max-md:max-w-full">Name</label>
                <input type="text" id="name" v-model="user.name" name="name" class="shrink-0 mt-1 bg-white rounded-lg border border-gray-300 border-solid h-[57px] w-full" />
                <div class="error" v-if="errors.name">{{ errors.name }}</div>

                <label for="email" class="block mt-4 text-lg leading-6 text-left text-gray-900 max-md:max-w-full">Email</label>
                <input type="email" id="email" v-model="user.email" name="email" class="shrink-0 mt-1 bg-white rounded-lg border border-gray-300 border-solid h-[57px] w-full" />
                <div class="error" v-if="errors.email">{{ errors.email }}</div>

                <label for="password" class="block mt-4 text-lg leading-6 text-left text-gray-900 max-md:max-w-full">Password</label>
                <input type="password" id="password" v-model="user.password" name="password" class="shrink-0 mt-1 bg-white rounded-lg border border-gray-300 border-solid h-[57px] w-full" />
                <div class="error" v-if="errors.password">{{ errors.password }}</div>

                <label for="confirm_password" class="block mt-4 text-lg leading-6 text-left text-gray-900 max-md:max-w-full">Confirm Password</label>
                <input type="password" id="confirm_password" v-model="user.confirm_password" name="confirm_password" class="shrink-0 mt-1 bg-white rounded-lg border border-gray-300 border-solid h-[57px] w-full" />
                <div class="error" v-if="errors.confirm_password">{{ errors.confirm_password }}</div>

                <button @click.prevent="register()" class="items-center justify-center w-full px-6 py-4 mt-4 text-lg font-medium leading-6 text-center text-white bg-blue-600 rounded-lg max-md:px-5 max-md:max-w-full">Create Account</button>
                </form>
                <div class="mt-4 text-sm font-medium leading-5 text-center text-blue-600 max-md:max-w-full">
                <span>Already have an account?</span>
                <a href="/login" class="text-blue-600">Login</a>
                </div>
            </section>
            </main>
        </div>
    </Layout>
  </template>

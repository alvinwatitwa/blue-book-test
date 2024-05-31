<script setup>
    import Layout from '../../layouts/Layout.vue';
    import { provide,ref } from "vue";
    import {useForm} from "@inertiajs/inertia-vue3";
    import Swal from 'sweetalert2'

    defineProps({ errors: Object });

    const user = ref({
        email: '',
        password: '',
    });

    function login() {;
        const form = useForm({
            email: user.value.email,
            password: user.value.password,
        });

        form.post(route('auth.login'), {
            onSuccess: () => {
                Swal.fire({
                        position: "top-end",
                        title: 'Login Successfull',
                        text: 'You have successfully logged in',
                        icon: 'success'
                    }).then(() => {
                        // location.reload();
                    });
            }
        });
    }


    const navigateToDashboard = async() => {
        window.location.href = '/dashboard';
    }
</script>

<template>
    <Layout>
        <main class="flex flex-col pb-20 bg-white">
            <section
                class="flex flex-col self-center p-6 mt-64 max-w-full bg-white rounded-xl border border-gray-300 border-solid w-[500px] max-md:px-5 max-md:mt-10"
            >
                <div class="flex gap-3 max-md:flex-wrap">
                <div class="flex justify-center items-center px-4 py-3 w-11 h-11 bg-gray-100 rounded-[999px]">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f213ad911035e59768b10cd8d7283244eaf642c4bf318932b31678d1b0d8fabc?apiKey=36440029668448b78377e0e215175ca3&" alt="Login Icon" class="w-5 aspect-square" />
                </div>
                <h2 class="flex-1 my-auto text-2xl font-semibold leading-8 text-gray-900">Login using your email</h2>
                </div>

                <form>
                <div class="mt-4 text-lg leading-6 text-center text-gray-900 max-md:max-w-full">
                    <label for="emailInput" class="sr-only">Email</label>
                    Email
                </div>
                <input
                    type="email"
                    id="emailInput"
                    v-model="user.email"
                    class="shrink-0 w-full mt-1 bg-white rounded-lg border border-gray-300 border-solid h-[57px] max-md:max-w-full"
                />

                <div class="mt-4 text-lg leading-6 text-center text-gray-900 max-md:max-w-full">
                    <label for="passwordInput" class="sr-only">Password</label>
                    Password
                </div>
                <input
                    type="password"
                    id="passwordInput"
                    v-model="user.password"
                    class="shrink-0 w-full mt-1 bg-white rounded-lg border border-gray-300 border-solid h-[57px] max-md:max-w-full"
                />

                <div class="mt-1 text-sm font-medium leading-5 text-right text-blue-600 max-md:max-w-full">
                    <a href="#" class="text-blue-600">Forgot password? Reset</a>
                </div>

                <button
                    type="submit"
                    @click.prevent="login()"
                    class="items-center justify-center w-full px-6 py-4 mt-4 text-lg font-medium leading-6 text-center text-white bg-blue-600 rounded-lg whitespace-nowrap max-md:px-5 max-md:max-w-full"
                >
                    Login
                </button>

                <div class="mt-4 text-sm font-medium leading-5 text-center max-md:max-w-full">
                    Don’t have an account? <a href="/get-started" class="text-blue-600"> Register</a>
                </div>
                </form>
            </section>
        </main>
    </Layout>


  </template>

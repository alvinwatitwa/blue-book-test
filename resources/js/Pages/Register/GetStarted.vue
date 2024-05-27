<script setup>

import Layout from './layouts/Layout';

</script>
<template>
    <Layout>
        <div class="flex flex-col pb-20 bg-white leading-[140%]">
        <main class="flex flex-col self-center p-6 mt-72 max-w-full text-lg font-medium bg-white rounded-xl border border-gray-300 border-solid w-[500px] max-md:px-5 max-md:mt-10">
        <section>
            <h2 class="text-2xl font-semibold text-gray-900 max-md:max-w-full">Create Account</h2>
            <p class="mt-1 text-base text-gray-500 max-md:max-w-full">Create an account to start managing your tasks.</p>
            <button class="flex justify-center items-center px-6 py-4 mt-4 text-center text-gray-900 bg-gray-100 rounded-lg max-md:px-5 max-md:max-w-full" aria-label="Continue with Google">
            <div class="flex gap-3">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b5b653fa655d47b22731285a3d7e12082e6c1c69c36efbe766c7579a60db9c3e?apiKey=36440029668448b78377e0e215175ca3&" alt="Google logo" class="shrink-0 self-start w-6 aspect-square" />
                <span>Continue with Google</span>
            </div>
            </button>
            <button class="flex gap-3 justify-center px-6 py-4 mt-4 text-center text-white bg-blue-600 rounded-lg max-md:flex-wrap max-md:px-5" aria-label="Continue with Facebook">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/7529c63adb233de4c201dddcefeca62d85b1508516fd5c9c900ccfd8029669e8?apiKey=36440029668448b78377e0e215175ca3&" alt="Facebook logo" class="shrink-0 self-start w-6 aspect-square" />
            <span>Continue with Facebook</span>
            </button>
            <button class="justify-center items-center px-6 py-4 mt-4 text-center text-white bg-blue-600 rounded-lg max-md:px-5 max-md:max-w-full" aria-label="Continue with Email">
            Continue with Email
            </button>
            <p class="mt-4 text-sm text-center text-blue-600 max-md:max-w-full">
            <span>Already have an account?</span>
            <span class="text-blue-600">Login</span>
            </p>
        </section>
        </main>
    </div>
    </Layout>

  </template>



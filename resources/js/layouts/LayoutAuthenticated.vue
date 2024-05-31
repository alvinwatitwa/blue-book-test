<script setup>
import { Link } from '@inertiajs/vue3';
import HeaderAuthenticated from '../components/HeaderAuthenticated.vue';

const props = defineProps({
        user: Object
    });


</script>
<template>
    <div class="flex flex-col pb-20 bg-white leading-[140%]">
      <main
        class="flex items-center justify-center w-full px-16 py-6 max-md:px-5 max-md:max-w-full"
        >
            <section class="flex flex-col w-full max-w-full">
                <HeaderAuthenticated :user="user" />
                <article
                    class="flex items-center justify-center w-full gap-2 bg-white max-md:flex-wrap max-md:max-w-full"
                >
                    <slot />
                </article>
            </section>
        </main>
    </div>
</template>

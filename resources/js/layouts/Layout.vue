<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <main>
    <header class="flex justify-center items-center px-16 py-4 w-full text-2xl font-semibold text-center text-blue-600 whitespace-nowrap bg-white max-md:px-5 max-md:max-w-full">
        <div class="flex gap-2 justify-between">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2e42f3cc77dcac2e045848618d6f3c05437982fdf658d4b515b2984f0c3d8c42?apiKey=36440029668448b78377e0e215175ca3&" alt="TaskManager logo" class="shrink-0 aspect-square w-[42px]" />
          <h1 class="my-auto">TaskManager</h1>
        </div>
      </header>
    <article>
      <slot />
    </article>
  </main>
</template>

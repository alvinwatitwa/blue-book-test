<script setup>
const props = defineProps({
    priority: { type: Object, required: true },
  });
</script>
<template>
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/05f1d3f2aa8f0caa5cfa70cba596f5a4c1099d2c7dc3fdd75e5c13a6da5c2650?apiKey=36440029668448b78377e0e215175ca3&" alt="" class="shrink-0 self-start w-4 aspect-[1.06]" />
    <span>{{ priority.name }}</span>
</template>

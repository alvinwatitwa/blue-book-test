<script setup>

const props = defineProps({
    status: { type: Object, required: true },
  });
</script>

<template>
    <div :class="[status.name == 'Pending' ? 'bg-amber-400 ' : 'bg-green-400', 'shrink-0 my-auto w-4 h-2 rounded-[198px]']"></div>
    <span>{{ status.name }}</span>
</template>

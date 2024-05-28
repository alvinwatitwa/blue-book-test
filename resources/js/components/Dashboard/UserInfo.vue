
<script setup>
    import Layout from '../../layouts/Layout.vue';
    const navigateToDashboard = async() => {
        window.location.href = '/dashboard';
    }
</script>
<template>
 <header class="flex justify-between w-full gap-2 bg-white max-md:flex-wrap max-md:max-w-full">
        <div class="flex gap-2 my-auto">
          <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/85940fd3cd4fdf1548eef93e8d58472c4b9e61a1e9a2225c4cec6038d6c588de?apiKey=36440029668448b78377e0e215175ca3&" alt="John Doe's profile picture" class="shrink-0 aspect-square w-[72px]" />
          <div class="flex flex-col my-auto">
            <h2 class="text-xl font-semibold text-gray-900">John Doe</h2>
            <p class="mt-1 text-base text-gray-500">johndoe@example.com</p>
          </div>
        </div>
        <div class="flex gap-3 whitespace-nowrap">
          <div class="flex flex-col p-3 font-medium text-gray-900 bg-amber-50 rounded-xl h-[108px] w-[108px]">
            <span class="text-sm text-gray-500">Pending</span>
            <span class="text-3xl font-bold">6</span>
            <div class="flex gap-1 text-xs">
              <div class="flex gap-0.5">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c42fe6ddb0b8c75b82bebf0a37718334489cdc2fe4000a6940cbd6a87f9af966?apiKey=36440029668448b78377e0e215175ca3&" alt="Pending item icon 1" class="self-start w-4 shrink-0 aspect-square" />
                <span>2</span>
              </div>
              <div class="flex gap-0.5">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4d85f9a1cdae34ee5f768fa5716e3a3ade4c5eb23b87fe4401f0a99dae5847bd?apiKey=36440029668448b78377e0e215175ca3&" alt="Pending item icon 2" class="self-start w-4 shrink-0 aspect-square" />
                <span>3</span>
              </div>
              <div class="flex gap-0.5">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a61753f600075aca8bbc61e6f5b05283994cac8c5ff07cdaf9992dc676abac29?apiKey=36440029668448b78377e0e215175ca3&" alt="Pending item icon 3" class="self-start w-4 shrink-0 aspect-square" />
                <span>1</span>
              </div>
            </div>
          </div>
          <div class="flex flex-col items-start p-3 bg-green-50 rounded-xl h-[108px] w-[108px] max-md:pr-5">
            <span class="text-sm font-medium text-gray-500">Complete</span>
            <span class="text-3xl font-bold text-gray-900">12</span>
          </div>
          <div class="flex flex-col items-start p-3 bg-gray-50 rounded-xl h-[108px] w-[108px] max-md:pr-5">
            <span class="text-sm font-medium text-gray-500">Backlog</span>
            <span class="text-3xl font-bold text-gray-900">6</span>
          </div>
        </div>
      </header>
  </template>

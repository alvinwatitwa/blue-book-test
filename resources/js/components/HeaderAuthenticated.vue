<script setup>
import {ref} from 'vue'
import {Link} from '@inertiajs/inertia-vue3';

    const showMenu = ref(false)

    const props = defineProps({
        user: Object
    });


function toggleDropdown(menuId) {
            showMenu.value = !showMenu.value;
            const dropdownMenu = document
            .getElementById(menuId);
            dropdownMenu.classList.toggle('hidden');
  }
</script>
<template>
  <header class="flex justify-center items-center self-stretch px-16 py-4 text-center bg-white border-b border-gray-300 border-solid leading-[140%] max-md:px-5">
    <div class="flex gap-5 justify-between w-full max-w-[1196px] max-md:flex-wrap max-md:max-w-full">
      <div class="flex gap-1.5 text-xl font-semibold text-blue-600 whitespace-nowrap">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/13a89b836115fcf957478730f80200eef84e5397dd8ff8a809379542ee9ecdd1?apiKey=36440029668448b78377e0e215175ca3&" alt="TaskManager logo" class="w-8 shrink-0 aspect-square" />
        <div class="my-auto">TaskManager</div>
      </div>
      <div class="flex items-center gap-1 text-sm font-medium text-gray-900">
        <div class="flex mx-2">
            <!-- Dropdown to the Right -->
            <div class="relative mr-2 text-left">
                <div class="flex items-center justify-center p-4 space-x-4">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e2e9da877906799252629605467d796a73ce7ea9e008c62b02956d8dfb9a7a1a?apiKey=36440029668448b78377e0e215175ca3&" alt="Profile picture of John Doe" class="self-stretch w-8 h-8 shrink-0 aspect-square" />
                <div class="self-stretch my-auto"  @click="toggleDropdown('dropdownMenuRight')">
                    <span class="hidden sm:block">
                         {{  user.name }}
                    </span>
                    <span
                    class="material-icons"
                    v-if="showMenu">
                    keyboard_arrow_down
                  </span>
                  <span
                    class="material-icons"
                    v-else>
                    keyboard_arrow_up
                  </span>

                </div>
                </div>
                <div class="absolute right-0 hidden w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 animate-fadeIn"
                     id="dropdownMenuRight"  @click="toggleDropdown('dropdownMenuRight')">
                     <span class="flex ml-3">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e2e9da877906799252629605467d796a73ce7ea9e008c62b02956d8dfb9a7a1a?apiKey=36440029668448b78377e0e215175ca3&" alt="Profile picture of John Doe" class="self-stretch w-8 shrink-0 aspect-square" />
                        <span class="my-auto ml-1">{{  user.name }}</span>
                     </span>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:bg-gray-100">
                      <span
                            class="w-8 h-8 material-icons">
                            person
                      </span>
                       Profile
                      </a>
                      <Link href="/logout" method="post" class="block px-4 py-2 text-sm text-red-400 hover:bg-gray-100">
                            <span
                            class="w-8 h-8 material-icons">
                                logout
                            </span>
                        Log Out
                    </Link>
                </div>
            </div>
            </div>
      </div>
    </div>
  </header>
</template>

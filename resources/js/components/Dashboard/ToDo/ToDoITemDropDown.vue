
<script>
      isOpen: false

    function toggleDropdown() {
      this.isOpen = !this.isOpen;
    }

    function closeDropdown() {
      this.isOpen = false;
    }

</script>

<template>
    <div class="dropdown" @click.stop="toggleDropdown">
      <slot name="icon"></slot>
      <div v-if="isOpen" class="dropdown-menu">
        <slot name="menu"></slot>
      </div>
    </div>
  </template>

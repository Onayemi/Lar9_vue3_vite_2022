<script setup>
import TopBar from './topBar.vue'
import SideBar from './sideBar.vue'
</script>

<template>
    <side-bar />

    <!-- start: Main -->
    <main class="bg-light">
        <div class="p-2">

            <top-bar />

            <slot />

        </div>
    </main>
    <!-- end: Main -->
</template>


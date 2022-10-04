<script setup>
import TopBar from './topBar.vue'
import Footer from './footer.vue'
</script>

<template>
    <div>
        <TopBar />

        <slot />

        <Footer />
    </div>
</template>
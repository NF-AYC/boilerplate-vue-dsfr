<script setup lang="ts">
/**
 * HomeTemplate.vue - A template for the home page.
 *
 * This component defines the layout for the home page.
 */
</script>

<template>
  <div class="home-template">
    <Header />
    <main>
      <slot />
    </main>
    <Footer />
  </div>
</template>

<style scoped>
.home-template {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

main {
  flex: 1;
}
</style>

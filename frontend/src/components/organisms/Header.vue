<script setup lang="ts">
import { DsfrHeader } from '@gouvminint/vue-dsfr'

const serviceTitle = 'Service'
const serviceDescription = 'Description du service'
const logoText = ['Ministère', 'de l’intérieur']

const quickLinks = [
  {
    label: 'Home',
    to: '/',
    icon: 'ri-home-4-line',
    iconAttrs: { color: 'var(--red-marianne-425-625)' },
  },
  {
    label: 'À propos',
    to: '/a-propos',
    icon: 'ri-question-mark',
    iconRight: true,
  },
]
const searchQuery = ref('')

/**
 * Handles the search query from the SearchBar component.
 * @param {string} query - The search query.
 */
/*
function handleSearch (query: string) {
   console.log('Search query:', query)
}
   */
</script>

<template>
  <header class="header">
    <h1>My App</h1>
    <!-- <SearchBar @search="handleSearch" /> -->
    <DsfrHeader
      v-model="searchQuery"
      :service-title="serviceTitle"
      :service-description="serviceDescription"
      :logo-text="logoText"
      :quick-links="quickLinks"
      show-search
      @search="handleSearch"
    />
  </header>
</template>

<style scoped>
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  background-color: #f8f9fa;
}
</style>

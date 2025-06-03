<script setup lang="ts">
/**
 * Home.vue - The home page component.
 *
 * This component represents the home page of the application.
 */

// import HomeTemplate from '@/components/templates/HomeTemplate.vue'

import { onMounted, ref } from 'vue'
import api from '@/services/api'
import { login, testCompleteAuth } from '@/services/auth'

const email = ref('')
const password = ref('')
async function handleSubmit () {
  try {
    const response = await login({ email: email.value, password: password.value })
    console.log(response.data)
  }
  catch (error) {
    console.error(error)
  }
}
onMounted(() => {
  testCompleteAuth()
})
</script>

<template>
  <HomeTemplate>
    <p>
      <span class="fr-icon-ancient-gate-fill" /> <!-- Exemple icône DSFR -->
    </p>

    <p>
      <VIcon name="ri-flag-line" />  <!-- Exemple icône oh-vue-icon -->
    </p>

    <form @submit.prevent="handleSubmit">
      <label for="email">Email:</label>
      <input
        id="email"
        v-model="email"
        type="email"
        required
      >
      <label for="password">Password:</label>
      <input
        id="password"
        v-model="password"
        type="password"
        required
      >
      <button type="submit">
        Login
      </button>
    </form>
  </HomeTemplate>
</template>

<script setup lang="ts">
import { useRegisterSW } from 'virtual:pwa-register/vue'

// import { Header } from '@/components/organisms/Header.vue'
import useToaster from './composables/use-toaster'

const toaster = useToaster()

const {
  offlineReady,
  needRefresh,
  updateServiceWorker,
} = useRegisterSW()

function close () {
  offlineReady.value = false
  needRefresh.value = false
}
</script>

<template>
  <home />
  <ReloadPrompt
    :offline-ready="offlineReady"
    :need-refresh="needRefresh"
    @close="close()"
    @update-service-worker="updateServiceWorker()"
  />

  <AppToaster
    :messages="toaster.messages"
    @close-message="toaster.removeMessage($event)"
  />
</template>

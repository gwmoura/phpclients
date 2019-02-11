<template>
  <div class="ClientsList">
    <client-card v-for="client in clients" :key="client.id" :client="client"  />
  </div>
</template>

<script>
import ClientCard from '../medium/ClientCard';

export default {
  name: 'ClientsList',
  components: {
    ClientCard,
  },
  props: {
    clients: {
      type: Array,
    },
  },
};
</script>

<style scoped>
</style>

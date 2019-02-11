<template>
  <div class="ClientsPage">
    <h1 class="title">Clients List</h1>
    <clients-list :clients="clients" />
  </div>
</template>

<script>
import { getClients } from '../services/ClientServices';
import ClientsList from '../components/large/ClientsList';

export default {
  name: 'ClientsPage',
  components: {
    ClientsList,
  },
  data() {
    return {
      clients: getClients(),
    };
  },
};
</script>

<style scoped>
</style>

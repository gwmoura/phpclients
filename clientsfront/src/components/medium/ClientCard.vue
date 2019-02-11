<template>
  <div class="clientCard">
    <div class="clientImage">
      <img :src="getImage" />
    </div>
    <client-data :label="'Name'" :value="client.name" />
    <client-data :label="'Phone'" :value="client.phone" />
    <client-data :label="'E-mail'" :value="client.email" />
  </div>
</template>

<script>
import ClientData from '../small/ClientData';

export default {
  name: 'ClientCard',
  components: {
    ClientData,
  },
  props: {
    client: {
      type: Object,
    },
  },
  computed: {
    getImage() {
      return this.client.image ? this.client.image : 'https://via.placeholder.com/100';
    },
  },
};
</script>

<style scoped>
</style>

<template>
  <p>
    <b>{{ label }}</b>: {{ value }}
  </p>
</template>

<script>
export default {
  name: 'ClientData',
  props: {
    label: { type: String },
    value: { type: String },
  },
};
</script>

<style scoped>

</style>

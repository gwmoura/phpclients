<template id="NavBar">
  <ul class="navbar">
    <li v-for="(link, index) in links" :key="index">
      <router-link :to="link.href">{{ link.label }}</router-link>
    </li>
  </ul>
</template>

<script>
export default {
  name: 'NavBar',
  props: {
    links: {
      type: Array,
      default() { return []; },
    },
  },
};
</script>

<style>
  ul li {
    margin: 5px;
    display: inline-block;
  }
  ul li a {
    text-decoration: none;
    color: #42b983;
  }
</style>

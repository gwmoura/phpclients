<template>
  <div id="app">
    <img src="./assets/logo.png">
    <nav-bar :links="links" />
    <router-view/>
  </div>
</template>

<script>
import NavBar from './components/large/NavBar';

export default {
  name: 'App',
  components: {
    NavBar,
  },
  data() {
    return {
      links: [
        { label: 'Home', href: '/' },
        { label: 'Hello', href: '/hello' },
        { label: 'Clients', href: '/clients' },
      ],
    };
  },
};
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

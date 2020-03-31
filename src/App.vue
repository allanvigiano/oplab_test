<template>
  <div>
    <page-navbar></page-navbar>
    <page-main></page-main>
  </div>
</template>

<script>
import Navbar from "./page/Navbar.vue";
import Main from "./page/Main.vue";
export default {
  name: "app",
  components: {
    "page-navbar": Navbar,
    "page-main": Main
  },
  data() {
    return {
      msg: "Welcome to Your Vue.js App"
    };
  }
};
</script>

<style lang="scss">
</style>

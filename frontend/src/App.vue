<template>
  <HeaderMenu />
  <router-view />
  <FooterMenu />
</template>

<script>
import HeaderMenu from '@/components/HeaderMenu.vue';
import FooterMenu from '@/components/FooterMenu.vue';
export default {
  components: {
    HeaderMenu,
    FooterMenu,
  },
};
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}
</style>

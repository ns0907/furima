<template>
  <HeaderMenu />
  <router-view />
  <FooterMenu />
</template>

<script>
import HeaderMenu from '@/components/modules/HeaderMenu.vue';
import FooterMenu from '@/components/modules/FooterMenu.vue';
export default {
  components: {
    HeaderMenu,
    FooterMenu,
  },
};
</script>

<style lang="scss">
@import "@/assets/common/scss/common.scss";
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}
</style>

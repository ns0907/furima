<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png" />

    <Top msg="Welcome to Your Vue.js App" />
  </div>
</template>

<script>
// @ is an alias to /src
import Top from '@/components/Top.vue';

export default {
  name: 'TopView',
  components: {
    Top,
  },
};
</script>

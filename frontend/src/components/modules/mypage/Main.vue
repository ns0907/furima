<template>
  <main class="col">
    <h2>プロフィール</h2>
  </main>
</template>

<script>
import axios from 'axios';
export default {
  name: 'MainComponent',
  setup() {
    axios
      .get(process.env.VUE_APP_API_URL + '/profile', {})
      .then((response) => {
        console.log(response);
      })
      .catch((error) => {
        console.log(error);
      });
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->1
<style lang="scss" scoped>
main {
  h2 {
    margin-top: 1rem;
  }
}
</style>

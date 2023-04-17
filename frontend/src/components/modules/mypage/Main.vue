<template>
  <main class="col">
    <h2>プロフィール</h2>
    <div class="w-50">
      <form @submit.prevent="submit">
        <p>{{message}}</p>
        <div class="mb-3">
          <label for="nickname" class="form-label">ニックネーム:</label>
          <input type="text" class="form-control" id="nickname" v-model="user.nickname" />
        </div>
        <div class="mb-3">
          <label for="introduction" class="form-label">自己紹介:</label>
          <textarea class="form-control" id="introduction" v-model="user.introduction" />
        </div>
        <button type="submit" class="btn btn-primary">プロフィール変更</button>
      </form>
    </div>
  </main>
</template>

<script>
import axios from 'axios';
import { loginStore } from '@/stores/loginStore';
import { reactive, ref } from 'vue';
export default {
  name: 'MainComponent',
  setup() {
    const store = loginStore();
    const user = reactive({ nickname: '', introduction: '' });
    const message = ref('');

    // method
    const submit = () => {
      axios
        .patch(process.env.VUE_APP_API_URL + '/user/profile/', {
          nickname: user.nickname,
          introduction: user.introduction,
        })
        .then((response) => {
          if (response.data) {
            message.value = '更新しました。';
          } else {
            message.value = '更新できませんでした。';
          }
        })
        .catch((error) => {
          console.log(error);
          message.value = '予期せぬエラーが発生しました。';
        });
    };

    // create
    axios.defaults.headers.common['Authorization'] = `Bearer ${store.token}`;
    axios
      .get(process.env.VUE_APP_API_URL + '/user/profile', {})
      .then((response) => {
        Object.assign(user, {
          nickname: response.data.nickname,
          introduction: response.data.introduction,
        });
        console.log(user);
      })
      .catch((error) => {
        console.log(error);
      });

    return { user, submit, message };
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

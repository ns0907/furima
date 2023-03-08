<template>
  <!-- ボタン・リンククリック後に表示される画面の内容 -->
  <div
    class="modal fade"
    id="loginModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="basicModal"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content p-3">
        <div class="modal-header border-0">
          <div class="modal-title text-center h3">ログイン</div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>メールアドレス：<input type="text" class="form-control" v-model="email" /></p>
          <p>パスワード：<input type="text" class="form-control" v-model="password" /></p>
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn btn-primary w-100" @click="login">ログイン</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue';
import axios from 'axios';
export default {
  name: 'LoginModalComponent',
  setup() {
    // data
    const showContent = ref(false);
    const email = ref();
    const password = ref();

    // methods
    const openModal = () => {
      showContent.value = true;
    };
    const closeModal = () => {
      showContent.value = false;
    };

    const login = () => {
      console.log(email.value + password.value);

      axios.get('http://homestead.test/sanctum/csrf-cookie').then((response) => {
        console.log(response)
        axios
          .post('http://homestead.test/api/login', {
            email: email.value,
            password: password.value,
          })
          .then((response) => console.log(response))
          .catch((error) => console.log(error));
      });
    };

    // computed

    // lifecycle hooks

    return { showContent, openModal, closeModal, login, email, password };
  },
};
</script>

<style lang="scss">
@import '@/assets/common/scss/_common.scss';

#overlay {
  /* 要素を重ねた時の順番 */
  z-index: 1;

  /* 画面全体を覆う設定 */
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);

  /* 画面の中央に要素を表示させる設定 */
  display: flex;
  align-items: center;
  justify-content: center;
}

#loginModal {
  @include mq(sm) {
    .modal-dialog {
      max-width: 65% !important;
    }
  }
}
</style>

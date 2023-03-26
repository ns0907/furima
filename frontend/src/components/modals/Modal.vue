<template>
  <!-- ボタン・リンククリック後に表示される画面の内容 -->
  <div
    class="modal fade"
    :id="propModalId"
    tabindex="-1"
    role="dialog"
    aria-labelledby="basicModal"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content p-3">
        <div class="modal-header border-0">
          <div class="modal-title text-center h3">{{ propTitle }}</div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          {{message}}
          <p>メールアドレス：<input type="text" class="form-control" v-model="email" /></p>
          <p>パスワード：<input type="text" class="form-control" v-model="password" /></p>
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn btn-primary w-100" @click="buttonClickModal">
            {{ propTitle }}
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue';
import LoginHelper from '@/functions/LoginHelper';
import RegistHelper from '@/functions/RegistHelper';
// import axios from 'axios';
export default {
  name: 'ModalComponent',
  props: { modalId: { type: String }, title: { type: String } },
  setup(props) {
    // data
    const showContent = ref(false);
    const propModalId = ref(props.modalId);
    const propTitle = ref(props.title);
    const email = ref();
    const password = ref();
    const message = ref('');

    // methods
    const { login } = LoginHelper();
    const { regist } = RegistHelper();

    const openModal = () => {
      showContent.value = true;
    };
    const closeModal = () => {
      showContent.value = false;
    };
    const buttonClickModal = async () => {
      switch(propModalId.value) {
        case 'loginModal': {
          const m = await login(email.value, password.value);
          
          message.value = m.message;
          console.log('message.ref:'+ m.message);
          break;
        }
        case 'registModal': {
          const m = await regist(email.value, password.value);
          message.value = m.message;
          console.log('message.ref:'+ m.message);
          break;
        }
      }
    };

    // computed

    // lifecycle hooks

    return { showContent, openModal, closeModal, email, password, propModalId, propTitle, login, regist, buttonClickModal, message };
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

// #loginModal {
//   @include mq(sm) {
//     .modal-dialog {
//       max-width: 65% !important;
//     }
//   }
// }
</style>

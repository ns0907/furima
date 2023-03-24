import { defineStore } from 'pinia';
import { ref } from 'vue';

export const loginStore = defineStore(
  'login',
  () => {
    const isLogin = ref(0);
    const email = ref();

    const setLogin = (result, e) => {
      isLogin.value = result;
      email.value = e;
    };

    return {
      isLogin,
      setLogin,
      email,
    };
  },
  {
    persist: {
      storage: localStorage,
      key: ['loginStore'],
    },
  }
);

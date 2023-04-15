import { defineStore } from 'pinia';
import { ref } from 'vue';

export const loginStore = defineStore(
  'login',
  () => {
    const isLogin = ref(0);
    const token = ref();

    const setLogin = (result, t) => {
      isLogin.value = result;
      token.value = t;
    };

    return {
      isLogin,
      setLogin,
      token,
    };
  },
  {
    persist: {
      storage: localStorage,
      key: ['loginStore'],
    },
  }
);

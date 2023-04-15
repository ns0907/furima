import axios from 'axios';
import { loginStore } from '@/stores/loginStore';
import { useRouter } from 'vue-router';

export default function () {
  const store = loginStore();
  const router = useRouter();

  const login = async (email, password) => {
    let message;
    await axios
      .get(process.env.VUE_APP_SANCTUM_URL)
      .then(async () => {
        await axios
          .post(process.env.VUE_APP_API_URL + '/login', {
            email: email,
            password: password,
          })
          .then((response) => {
            if (response.data.result) {
              store.setLogin(response.data.result, response.data.token);
            }
            message = response.data;
          })
          .catch((error) => {
            message = error.response.data;
          });
      })
      .catch((error) => {
        message = error.response.data;
      });
    return message;
  };

  const logout = async () => {
    let result;

    axios.defaults.headers.common['Authorization'] = `Bearer ${store.token}`;

    await axios
      .post(process.env.VUE_APP_API_URL + '/logout')
      .then((response) => {
        console.log(response);
        store.setLogin(0, '');
        result = response.data;
      })
      .catch((error) => {
        console.log(error);
        if (error.response.status === 401) {
          store.setLogin(0, '');
          router.push('/');
        }
      });

    if (result === true) {
      router.push('/');
    }
  };

  return { login, logout };
}

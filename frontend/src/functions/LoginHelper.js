import axios from 'axios';
import { loginStore } from '@/stores/login';

export default function () {
  const store = loginStore();

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
              store.setLogin(response.data.result, email);
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

  return { login };
}

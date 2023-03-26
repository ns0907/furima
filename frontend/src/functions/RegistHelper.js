import axios from 'axios';

export default function () {
  const regist = async (email, password) => {
    let message = '';
    await axios.get(process.env.VUE_APP_SANCTUM_URL).then(async (response) => {
      await axios
        .post(process.env.VUE_APP_API_URL + '/user/regist', {
          email: email,
          password: password,
        })
        .then((response) => {
          message = response.data;
        })
        .catch((error) => {
          message = error.response.data;
        });
    });

    return message;
  };

  return { regist };
}

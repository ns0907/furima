import axios from 'axios';

export default function () {
  const regist = async (email, password) => {
    let message = '';
    await axios.get('http://homestead.test/sanctum/csrf-cookie').then(async (response) => {
      console.log(response);
      await axios
        .post('http://homestead.test/api/user/regist', {
          email: email,
          password: password,
        })
        .then((response) => {message = response.data;})
        .catch((error) => {message = error.response.data; console.log(error.response.data.message);});
    });

    return message;
  };

  return { regist };
}

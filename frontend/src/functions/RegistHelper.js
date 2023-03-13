import axios from 'axios';

export default function () {
  const regist = (email,password) => {
    axios.get('http://homestead.test/sanctum/csrf-cookie').then((response) => {
      console.log(response);
      axios
        .post('http://homestead.test/api/user/regist', {
          email: email,
          password: password,
        })
        .then((response) => console.log(response))
        .catch((error) => console.log(error));
    });
  };

  return { regist };
}

import axios from 'axios';

export default function () {
  const login = async (email, password) => {
    return await axios.get('http://homestead.test/sanctum/csrf-cookie').then(async () => {
      return await axios
        .post('http://homestead.test/api/login', {
          email: email,
          password: password,
        })
        .then(response => {
          return response.data;
        })
        .catch((error) => {return error.response.data});
    });
  };

  return { login };
}

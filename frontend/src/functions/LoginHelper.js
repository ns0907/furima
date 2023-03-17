import axios from 'axios';

export default function () {
  const login = async (email, password) => {
    return await axios.get(process.env.VUE_APP_SANCTUM_URL).then(async () => {
      return await axios
        .post(process.env.VUE_APP_API_URL + '/login', {
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

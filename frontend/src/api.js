import * as axios from 'axios';

export const instance = axios.create({
  baseURL: 'http://localhost:8000',
});

export const checkEmail = data => instance.post('/check/email', { email: data });

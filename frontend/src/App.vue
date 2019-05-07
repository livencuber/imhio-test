<template>
  <div id="app">
    <EmailValidate/>
  </div>
</template>

<script>
import EmailValidate from './components/EmailValidate';

export default {
  name: 'App',
  components: {
    EmailValidate,
  },
};
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

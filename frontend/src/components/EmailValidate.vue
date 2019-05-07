<template>
  <div class="container">
    <div class="row">
      <div class="col-4 offset-4" >
        <h1>{{ msg }}</h1>
        <form action="" @submit="checkEmail">
          <input type="text" class="form-control" v-model="email">
          <div v-if="errorMsg"  class="alert alert-danger mt-2" role="alert">
            {{errorMsg.err}}
          </div>
          <div v-if="successMsg"  class="alert alert-success mt-2" role="alert">
            EMAIL SUCCESS
          </div>
          <button class="btn btn-primary mt-3 w-100" type="submit">Check</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import { checkEmail } from '../api';

export default {
  name: 'EmailValidate',
  methods: {
    checkEmail(event) {
      event.preventDefault();
      this.errorMsg = null;
      this.successMsg = null;
      checkEmail(this.email).then((response) => {
        this.successMsg = response.data;
      }).catch((err) => {
        this.errorMsg = err.response.data;
      });
    },
  },
  data() {
    return {
      msg: 'Email Validate',
      email: null,
      errorMsg: null,
      successMsg: null,
    };
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>

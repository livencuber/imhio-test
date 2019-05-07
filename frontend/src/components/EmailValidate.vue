<template>
  <div class="container">
    <div class="row">
      <div class="col-4 offset-4" >
        <h1>{{ msg }}</h1>
        <form action="" @submit="checkEmail">
          <input type="text" class="form-control" v-model="email">
          <button class="btn btn-primary mt-3 w-100" type="submit">Check</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'EmailValidate',
  methods: {
    checkEmail(event) {
      event.preventDefault();
    },
  },
  data() {
    return {
      msg: 'Email Validate',
      email: null,
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

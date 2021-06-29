<template>
  <form class="form" method="post" name="login">
        <h2 class="login-title">Login</h2>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" @change="handleChange" :value="form.username" required/>
        <input type="password" class="login-input" name="password" placeholder="Password" @change="handleChange" :value="form.password" required/>
        <input type="submit" name="submit" class="login-button"  @click="onFormSubmit"/>
  </form>
</template>

<script>
import axios from "axios";
// import MyForm from "./MyForm";
// import CustomerList from "./CustomerList";
// import Loader from "./Loader";

export default {
  name: "App",
  components: {
    // MyForm,
    // CustomerList,
    // Loader
  },
  data() {
    return {
      url: "http://localhost:8000",
      // customers: [],
      form: { username: "", password:"" },
      loader: false
    };
  },
  methods: {
     
     handleChange(event) {
      const {name, value } = event.target;
      let form = this.form;
      form[name] = value;
      this.form = form;
      console.log(this.form.username)
    },
    onFormSubmit(event) {
      // prevent form submit
      event.preventDefault();

      // form validation
      if (this.formValidation()) {
        // window.console.log("ready to submit");
        this.$emit("onFormSubmit", this.form);

        this.btnClass = "ui primary button submit-button";
        
        axios
        .post(this.url+"/login", {
          username: this.form.username,
          password: this.form.password,
        })
        .then(() => {
          console.log("logged in");
          this.$router.push('dashboard');

        })
        .catch(e => {
          alert(e);
        });
        
        
        
        
        
        // clear form fields
        this.clearFormFields();
      }
    },
    formValidation() {
      // username
      if (document.getElementsByName("username")[0].value === "") {
        alert("Enter username");
        return false;
      }

      // Password
      // if (document.getElementsByName("password")[0].value === "") {
      //   alert("Enter password");
      //   return false;
      // }

      return true;
    },
    clearFormFields() {
      // clear form data
      this.form.username = "";
      this.form.password = "";

      // clear form fields
      document.querySelector(".form").reset();
    }
  },
};
</script>

<style>
.vue-color {
  background: #41b883 !important;
}

.main.container {
  margin-top: 60px;
}

.submit-button {
  margin-top: 24px !important;
  float: right;
}

.data {
  margin-top: 15px;
}

thead tr th {
  background: #e0e0e0 !important;
}

.ui.inverted.dimmer {
  background-color: rgba(255, 255, 255, 0) !important;
}
</style>

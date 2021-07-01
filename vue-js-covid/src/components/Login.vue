<template>
  <div class="card">
    <h3 class="title">Log in</h3>
    <form class="form" method="post" name="login">
      <div class="email-login">
        <label for="username"> <b>Username</b></label>
        <input
          type="text"
          id="username"
          class="login-input"
          name="username"
          placeholder="Username"
          autofocus="true"
          @change="handleChange"
          :value="form.username"
          required
        />
        <label for="psw"><b>Password</b></label>
        <input
          type="password"
          class="login-input"
          name="password"
          id="psw"
          placeholder="Password"
          @change="handleChange"
          :value="form.password"
          required
        />
      </div>
      <button type="submit" name="submit" @click="onFormSubmit" class="cta-btn">
        Log In
      </button>
      <!-- <input
      type="submit"
      name="submit"
      class="login-button"
      @click="onFormSubmit"
    /> -->
    </form>
  </div>
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
      form: { username: "", password: "" },
      loader: false,
    };
  },
  methods: {
    handleChange(event) {
      const { name, value } = event.target;
      let form = this.form;
      form[name] = value;
      this.form = form;
      console.log(this.form.username);
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
          .post(this.url + "/login", {
            username: this.form.username,
            password: this.form.password,
          })
          .then((res) => {
            console.log("logged in");
            console.log(res.data);
            // this.$session.start()
            // this.$session.set('username', res.data.user.username)
            // console.log(this.$session.get('username'));
            localStorage.setItem('username',res.data.user.username)
            if (res.data.user.username === "admin") {
              this.$router.push("dashboard");
            } else {
              this.$router.push("userdashboard");
            }
          })
          .catch((e) => {
            alert(e.message);
            console.log(e);
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
    },
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

body {
  background-color: rgb(228, 229, 247);
}
.social-login img {
  width: 24px;
}
a {
  text-decoration: none;
}

.card {
  font-family: sans-serif;
  width: 300px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 3em;
  margin-bottom: 3em;
  border-radius: 10px;
  background-color: #ffff;
  padding: 1.8rem;
  box-shadow: 2px 5px 20px rgba(0, 0, 0, 0.1);
}

.title {
  text-align: center;
  font-weight: bold;
  margin: 0;
  font-size: 25px;
}
.subtitle {
  text-align: center;
  font-weight: bold;
}
.btn-text {
  margin: 0;
}

.social-login {
  display: flex;
  justify-content: center;
  gap: 5px;
}

.google-btn {
  background: #fff;
  border: solid 2px rgb(245 239 239);
  border-radius: 8px;
  font-weight: bold;
  display: flex;
  padding: 10px 10px;
  flex: auto;
  align-items: center;
  gap: 5px;
  justify-content: center;
}
.fb-btn {
  background: #fff;
  border: solid 2px rgb(69, 69, 185);
  border-radius: 8px;
  padding: 10px;
  display: flex;
  align-items: center;
}

.or {
  text-align: center;
  font-weight: bold;
  border-bottom: 2px solid rgb(245 239 239);
  line-height: 0.1em;
  margin: 25px 0;
}
.or span {
  background: #fff;
  padding: 0 10px;
}

.email-login {
  display: flex;
  flex-direction: column;
}
.email-login label {
  color: rgb(170 166 166);
}

input[type="text"],
input[type="password"] {
  padding: 15px 20px;
  margin-top: 8px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-sizing: border-box;
}

.cta-btn {
  background-color: rgb(69, 69, 185);
  color: white;
  padding: 18px 20px;
  margin-top: 10px;
  margin-bottom: 20px;
  width: 100%;
  border-radius: 10px;
  border: none;
}

.forget-pass {
  text-align: center;
  display: block;
}
</style>

<template>
  <button class="leftbtn" @click="onFormSubmit">Logout</button>
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
      loader: false,
    };
  },
  methods: {
    onFormSubmit(event) {
      // prevent form submit
      event.preventDefault();

      // form validation

      this.btnClass = "ui primary button submit-button";

      axios
        .get(this.url + "/logout")
        .then((e) => {
          console.log(e.message);
          console.log("logged out");
        })
        .catch((e) => {
          alert(e);
        });
    },
  },
};
</script>

<style>
.leftbtn {
  align-self: flex-end;
  float: right;
  position: absolute;
  right: 0;
  margin-right: 50px;
  margin-top: -4px;
}
</style>

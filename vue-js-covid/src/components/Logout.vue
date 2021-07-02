<template>
  <button
    class="leftbtn bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4  hover:border-red-800 rounded"
    @click="onFormSubmit"
  >
    Logout
  </button>
</template>

<script>
//import axios from "axios";
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

      // axios
      //   .get(this.url + "/logout")
      //   .then(() => {
      localStorage.removeItem("username");
      this.$router.push("/");
      // console.log(e.message);
      // console.log("logged out");
      //       })
      //       .catch((e) => {
      //         alert(e);
      //       });
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
  margin-top: -9px;
  margin-bottom: 3px;
}
</style>

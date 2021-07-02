<template>
  <div id="app">
    <div class="ui fixed inverted menu vue-color">
      <div class="ui container">
        <img
          src="../assets/Group.png"
          alt="logo"
          width="130"
        />
        <Logout />
      </div>
    </div>

    <div class="ui main container">
      <Loader v-if="loader" />
      <UserCustomerList :customers="customers" />
    </div>
  </div>
</template>

<script>
import axios from "axios";
import UserCustomerList from "./UserCustomerList.vue";
import Logout from "./Logout";
import Loader from "./Loader";

export default {
  name: "App",
  components: {
    UserCustomerList,
    Loader,
    Logout,
  },
  data() {
    return {
      url: "http://localhost:8000",
      customers: [],
      form: {
        fullname: "",
        dob: "",
        age: "",
        acn: "",
        address: "",
        vaccine: "",
        v1date: "",
        v2date: "",
        result: "",
        iso: "",
        isEdit: false,
      },
      loader: false,
    };
  },
  methods: {
    getCustomers() {
      this.loader = true;

      axios.get(this.url + "/patients").then((data) => {
        console.log(data.data);
        this.customers = data.data;
        this.loader = false;
      });
    },
  },
  created() {
    this.getCustomers();
  },
};
</script>

<style>
.vue-color {
  background: #4b71ff !important;
}

.main.container {
  margin-top: 80px;
}

.submit-button {
  margin-top: 24px !important;
  float: right;
}

.data {
  margin-top: 15px;
}

thead tr th {
  background: #6f94f8  !important;
}

.ui.inverted.dimmer {
  background-color: rgba(255, 255, 255, 0) !important;
  height: 50px;
}
</style>

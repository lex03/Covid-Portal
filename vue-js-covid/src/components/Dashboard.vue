<template>
  <div id="app">
    <div class="ui fixed inverted menu vue-color">
      <div class="ui container">
        <a href="#" class="header item">COVID PORTAL</a>
        <!-- <h5 class="header item">Admin Side</h5> -->
        <Logout />
      </div>
    </div>

    <div class="ui main container">
      <MyForm :form="form" @onFormSubmit="onFormSubmit" />
      <Loader v-if="loader" />
      <CustomerList :customers="customers" @onEdit="onEdit" @onDelete="onDelete"/>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import MyForm from "./MyForm";
import CustomerList from "./CustomerList";
import Logout from "./Logout";
import Loader from "./Loader";

export default {
  name: "App",
  components: {
    MyForm,
    CustomerList,
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
        this.customers = data.data;
        this.loader = false;
      });
    },
    deleteCustomer(id) {
      this.loader = true;
      axios
        .delete(this.url+"/patients/delete/"+id)
        .then(() => {
          this.getCustomers();
        })
        .catch(e => {
          alert(e);
        });
    },
    createCustomer(data) {
      this.loader = true;
      // console.log("data");
      axios
        .post(this.url + "/patients", {
          fullname: data.fullname,
          dob: data.dob,
          age: data.age,
          acn: data.acn,
          address: data.address,
          vaccine: data.vaccine,
          v1date: data.v1date,
          v2date: data.v2date,
          result: data.result,
          iso: data.iso,
        })
        .then(() => {
          this.getCustomers();
        })
        .catch((e) => {
          alert(e);
        });
    },
    editCustomer(data) {
      this.loader = true;
      axios
        .post(this.url + "/patients/" + data.id, {
          fullname: data.fullname,
          dob: data.dob,
          age: data.age,
          acn: data.acn,
          address: data.address,
          vaccine: data.vaccine,
          v1date: data.v1date,
          v2date: data.v2date,
          result: data.result,
          iso: data.iso,
        })
        .then(() => {
          this.getCustomers();
        })
        .catch((e) => {
          alert(e);
        });
    },
    onDelete(id) {
      // window.console.log("app delete " + id);
      this.deleteCustomer(id);
    },
    onEdit(data) {
      // window.console.log("app edit ", data);

      this.form = data;
      this.form.isEdit = true;
    },
    onFormSubmit(data) {
      // window.console.log("app onFormSubmit", data);

      if (data.isEdit) {
        // call edit customer
        this.editCustomer(data);
      } else {
        // call create customer
        this.createCustomer(data);
      }
    },
  },
  created() {
    this.getCustomers();
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
.body {
  background-color: white;
}
</style>

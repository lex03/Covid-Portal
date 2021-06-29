<template>
  
    <button class="login-button" @click="onFormSubmit">Logout</button>
  
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
      loader: false
    };
  },
  methods: {
     
    onFormSubmit(event) {
      // prevent form submit
      event.preventDefault();

      // form validation
      
        this.btnClass = "ui primary button submit-button";
        
        axios.get(this.url+"/logout").then(e=>{
        console.log("logged out");
        })
        .catch(e => {
          alert(e);
        });
        
      
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
</style>

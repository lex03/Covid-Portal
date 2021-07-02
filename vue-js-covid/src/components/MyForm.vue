<template>
  <div class="my-form">
    <form class="ui form w-full max-w-lg">
      <div class="flex flex-wrap -mx-3 mb-6 justify-center">
        <div class="four wide field px-2">
          <label>Full Name</label>
          <input
            type="text"
            name="fullname"
            placeholder="Full Name"
            @change="handleChange"
            :value="form.fullname"
          />
        </div>

        <div class="two wide field px-2">
          <label>Age</label>
          <input
            type="text"
            name="age"
            placeholder="age"
            @change="handleChange"
            :value="form.age"
          />
        </div>

        <div class="four wide field px-2">
          <label>Date of Birth</label>
          <input
            type="date"
            name="dob"
            placeholder="DOB"
            @change="handleChange"
            :value="form.dob"
          />
        </div>

        <div class="six wide field px-2">
          <label>Aadhar card number</label>
          <input
            type="text"
            name="acn"
            placeholder="Aadhar card Number"
            @change="handleChange"
            :value="form.acn"
          />
        </div>

        <div class="sixteen wide field px-2">
          <label>Address</label>
          <input
            type="text"
            name="address"
            placeholder="Full address"
            @change="handleChange"
            :value="form.address"
          />
        </div>

        <div class="two wide field px-2 ">
          <label for="vaccine">Vaccination Taken</label>
          <select
            id="vaccine"
            name="vaccine"
            @change="handleChange"
            :value="form.vaccine"
          >
            <option value="yes">Yes</option>
            <option value="no">NO</option>
          </select>
        </div>

        <div v-if="form.vaccine === 'yes'" class="four wide field px-2">
          <label>First Dose date</label>
          <input
            type="date"
            name="v1date"
            placeholder="1st Dose date"
            id="from-datepicker"
            @change="handleChange"
            :value="form.v1date"
            required
          />
        </div>
        <div v-if="form.vaccine === 'yes'" class="four wide field px-2">
          <label>Second Dose Date</label>
          <input
            type="date"
            name="v2date"
            placeholder="2nd Dose date"
            id="from-datepicker"
            @change="handleChange"
            :value="form.v2date"
          />
        </div>
        <div class="two wide field px-2 ">
          <label for="result">Result</label>
          <select
            id="result"
            name="result"
            @change="handleChange"
            :value="form.result"
          >
            <option value="positive">Positive</option>
            <option value="negative">Negative</option>
            <option value="recovered">Recovered</option>
          </select>
        </div>
        <div v-if="form.result === 'positive'" class="two wide field px-2">
          <label for="iso">Isolation</label>
          <select id="iso" name="iso" @change="handleChange" :value="form.iso">
            <option value="home">Home</option>
            <option value="hospital">Hospital</option>
          </select>
        </div>

        
      </div>
      <div class="flex justify-center mb-4">
          <button :class="btnClass" @click="onFormSubmit">
            {{ btnName }}
          </button>
        </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "MyForm",
  data() {
    return {
      btnName: "Save",
      btnClass: " bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded",
    };
  },
  props: {
    form: {
      type: Object,
    },
  },
  methods: {
    handleChange(event) {
      const { name, value } = event.target;
      let form = this.form;
      form[name] = value;
      this.form = form;
    },
    onFormSubmit(event) {
      // prevent form submit
      event.preventDefault();

      // form validation
      if (this.formValidation()) {
        // window.console.log("ready to submit");
        this.$emit("onFormSubmit", this.form);

        // change the button to save
        this.btnName = "Save";
        this.btnClass = "ui primary button submit-button";

        // clear form fields
        this.clearFormFields();
      }
    },
    
    formValidation() {
      // name
      if (document.getElementsByName("fullname")[0].value === "") {
        alert("Enter fullname");
        return false;
      }

      // // dob
      if (document.getElementsByName("dob")[0].value === "") {
        alert("Enter dob");
        return false;
      }

      // // email
      if (document.getElementsByName("age")[0].value === "") {
        alert("Enter Age");
        return false;
      }

      if (document.getElementsByName("address")[0].value === "") {
        alert("Enter Address");
        return false;
      }
      if (document.getElementsByName("acn")[0].value === "") {
        alert("Enter Aadhar card number");
        return false;
      }
      if (document.getElementsByName("vaccine")[0].value === "") {
        alert("Enter Vaccination");
        return false;
      }
      if (document.getElementsByName("vaccine")[0].value === "yes" && document.getElementsByName("v1date")[0].value === "") {
        alert("Enter Vaccination 1 date");
        return false;
      }      
      if (document.getElementsByName("result")[0].value === "") {
        alert("Enter Result");
        return false;
      }
      return true;
    },
    clearFormFields() {
      // clear form data
      this.form.fullname = "";
      this.form.dob = "";
      this.form.age = "";
      this.form.acn = "";
      this.form.address = "";
      this.form.vaccine = "";
      this.form.v1date = "";
      this.form.v2date = "";
      this.form.result = "";
      this.form.iso = "";
      this.form.isEdit = false;

      // clear form fields
      document.querySelector(".form").reset();
    },
  },
  updated() {
    if (this.form.isEdit) {
      this.btnName = "Update";
      this.btnClass = "ui orange button submit-button";
    }
  },
};
</script>

<style scoped></style>

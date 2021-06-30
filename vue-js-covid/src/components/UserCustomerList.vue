<template>
  <div class="customer-list">
    <div class="data">
      <table class="ui celled table">
        <thead>
          <tr>
            <th style="width: 50px; text-align: center;">#</th>
            <th>Name</th>
            <th>Age</th>
            <th>Dob</th>
            <th>ACN</th>
            <th>Address</th>
            <th>Vaccination</th>
            <th>1st Dose</th>
            <th>2nd Dose</th>
            <th>Result</th>
            <th>Isolation</th>
          </tr>
        </thead>

        <tbody>
          <Customer
            v-for="customer in customers"
            :key="customer.id"
            :customer="customer"
          />
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import Customer from "./UserCustomer";
export default {
  name: "CustomerList",
  components: {
    Customer,
  },
  props: {
    customers: {
      type: Array,
    },
  },
  methods: {
    // onDelete(id) {
    //   // window.console.log("customer list delete " + id);
    //   this.$emit("onDelete", id);
    // },
    onEdit(data) {
      // window.console.log("customer list edit " + data);
      this.$emit("onEdit", data);
    },
  },
};
</script>

<style scoped></style>

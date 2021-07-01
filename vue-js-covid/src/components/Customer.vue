<template>
  <tr>
    <td>{{ customer.id }}</td>
    <td>{{ customer.fullname }}</td>
    <td>{{ customer.age }}</td>
    <td>{{ customer.dob }}</td>
    <td>{{ customer.acn }}</td>
    <td>{{ customer.address }}</td>
    <td>{{ customer.vaccine }}</td>
    <td>{{ customer.v1date }}</td>
    <td>{{ customer.v2date }}</td>
    <td>{{ customer.result }}</td>
    <td>{{ customer.iso }}</td>
    <td>
      <button class="mini bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" @click="onEdit">Edit</button>
      <!-- <button class="mini ui red button" @click="onDelete">Delete</button> -->
    </td>
  </tr>
</template>

<script>
export default {
  name: "Customer",
  props: {
    customer: {
      type: Object,
    },
  },
  methods: {
    // onDelete() {
    //   // window.console.log("customer delete " + this.customer.id);
    //   this.$emit("onDelete", this.customer.id);
    // },
    onEdit() {
      // window.console.log("customer edit " + this.customer.id);
      this.$emit("onEdit", this.customer);
    },
  },
};
</script>

<style scoped></style>

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
  methods: {},
};
</script>

<style scoped></style>

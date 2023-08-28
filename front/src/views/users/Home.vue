<template>

</template>
<h3 class="text-center mt-3">
Список пользователей
</h3>
<div>
<table class="table table-striped table-hover">
  <thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Имя</th>
    <th scope="col">Email</th>
    <th scope="col">Edit</th>
    <th scope="col">Delete</th>
  </tr>

  </thead>
  <tbody>
  <template v-for="user in userList">
    <tr>
      <th>{{ user.id }}</th>
      <td>{{ user.name }}</td>
      <td>{{ user.email }}</td>
    </tr>
  </template>
  </tbody>
</table>
</div>
<script>

export default {
  data() {
    return {
      userList: null,
      id: null,
      name: null,
      email: null
    }
  },

  mounted() {

  },
}
</script>
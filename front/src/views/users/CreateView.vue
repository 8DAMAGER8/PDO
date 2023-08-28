<template>
  <h3 class="text-center mt-3">
    Добавление чебурека
  </h3>
  <form class="w-50 table">
    <div class="mb-3 ">
      <label for="name" class="form-label">Имя</label>
      <input type="text" class="form-control" v-model="name" placeholder="Укажите Имя">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Почта</label>
      <input type="email" class="form-control" v-model="email" placeholder="Укажите Email">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Пароль</label>
      <input type="password" class="form-control" v-model="password" placeholder="Введите пароль">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Подтверждение пароля</label>
      <input type="password" class="form-control" v-model="password_confirmation" placeholder="Повторите пароль">
    </div>
    <div class="mb-3">
      <input @click.prevent="createUser" type="submit" class="btn btn-primary" value="Добавить пользователя">
    </div>
  </form>
</template>

<style>

</style>
<script>

export default {
  data() {
    return {
      name: '',
      email: '',
      password: '',
      password_confirmation: '',
    }
  },

  methods: {
    createUser() {
      axios.get(`http://localhost:8888/index.php/user/list?limit=5`,
          {

          }).then(res => {
        console.log(res)
      }).catch((error) => {
        console.error(error)
      })
    },
  }
}
</script>
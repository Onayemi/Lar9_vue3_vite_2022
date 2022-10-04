<script setup>
import publicLayout from '../../components/layouts/public/publicLayout.vue'
import { reactive, ref} from 'vue'
import { useRouter } from "vue-router";

  let router = useRouter();
  let form = reactive({ 
      name: '',
      email: '', 
      password: '',
      c_password: '',
  });

  const errors = ref([]);
  
  const register = async () => {
      await axios.post("/api/register", form).then(response =>{
          // console.log(response);
          if (response.data.success) {
              localStorage.setItem('token', response.data.data.token); // JSON.stringify(rs)
              router.push("/admin/home");
          }
          // else{
          //     error.value = response.data.message;
          // }
      }).catch(e => {
          errors.value = e.response.data.message;
      })
  }
</script>

<template>
  <publicLayout>
    <section class="bg-light">
      <div class="container-lg col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
          <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">
              Vertically centered hero sign-up form
            </h1>
            <p class="col-lg-10 fs-4">
              Below is an example form built entirely with Bootstrap’s form
              controls. Each required form group has a validation state that can
              be triggered by attempting to submit the form without completing it.
            </p>
          </div>


          <div class="col-md-10 mx-auto col-lg-5">
            <form
              class="p-4 p-md-5 border rounded-3 bg-light"
              @submit.prevent="register"
            >
              <div class="form-floating mb-3">
                <input
                  type="text"
                  class="form-control form-control-sm"
                  id="name"
                  name="name"
                  placeholder="name@example.com"
                  v-model="form.name"
                />
                <label for="floatingInput">Full Name</label>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="email"
                  class="form-control form-control-sm"
                  id="email"
                  name="email"
                  placeholder="name@example.com"
                  v-model="form.email"
                />
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  placeholder="Password"
                  v-model="form.password"
                />
                <label for="floatingPassword">Password</label>
              </div>
              <div class="form-floating mb-3">
                <input
                  type="password"
                  class="form-control"
                  id="c_password"
                  name="c_password"
                  placeholder="Password"
                  v-model="form.c_password"
                />
                <label for="floatingPassword">Confirm Password</label>
              </div>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me" /> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">
                Sign Up
              </button>
              <hr class="my-4" />
              <small class="text-muted"
                >By clicking Sign up, you agree to the terms of use.</small
              >
            </form>
          </div>
        </div>
      </div>
    </section>
  </publicLayout>
</template>

<style scoped>
.text-danger {
  color: red;
  font-weight: bold;
  font-size: 14px;
}
</style>
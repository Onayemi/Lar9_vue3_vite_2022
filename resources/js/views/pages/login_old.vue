<script setup>
import publicLayout from '../../components/layouts/public/publicLayout.vue'
import { reactive, ref} from 'vue'
import { useRouter } from "vue-router";

    let router = useRouter();
    let form = reactive({ 
            email: '', 
            password: ''
        });
    const error = ref('');
    
    const login = async () => {
        await axios.post("/api/login", form).then(response => {
            // console.log(response);
            if (response.data.success) {
                localStorage.setItem('token', response.data.data.token); // JSON.stringify(rs)
                router.push({name: 'adminHome'});
            }
            // else{
            //     error.value = response.data.message;
            // }
        }).catch(e => {
            console.log(e)
            error.value = e.data.message;

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
            <p class="text-danger" v-if="error">{{ error }}</p>
            <form
              class="p-4 p-md-5 border rounded-3 bg-light"
              @submit.prevent="login"
            >
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
                <!-- <input
                  type="password"
                  class="form-control"
                  id="floatingPassword"
                  placeholder="Password"
                  v-model="form.password"
                /> -->
                <label for="floatingPassword">Password</label>
              </div>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me" /> Remember me
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">
                Sign In
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
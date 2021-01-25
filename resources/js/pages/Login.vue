<template>
    <div class="container">
        <div class="card card-default">
            <div class="card-header">Login</div>

            <div class="card-body">
                <div class="alert alert-danger" v-if="has_error">
                    <p>Error,Email or Password is invalid.</p>
                </div>
                <form autocomplete="off" @submit.prevent="login" method="post">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" class="form-control" placeholder="user@example.com" v-model="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" v-model="password" required>
                    </div>
                    <mdb-btn color="primary">Primary</mdb-btn>
                    <b-button type="submit" variant="success">Lodfsffdgin</b-button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
 import { mdbBtn } from 'mdbvue';
  export default {
    data() {
      return {
        email: null,
        password: null,
        has_error: false
      }
    },

    mounted() {
      //
    },
        components: {
            mdbBtn
        },
    methods: {
      login() {
        // get the redirect object
        var redirect = this.$auth.redirect()
        var app = this
        console.log(app.email,app.password)
        this.$auth.login({
          params: {
            email: app.email,
            password: app.password
          },
          success: function() {
            // handle redirection
            const redirectTo = redirect ? redirect.from.name : this.$auth.user().role === 2 ? 'admin.dashboard' : 'DisplayItem'

            this.$router.push({name: redirectTo})
          },
          error: function() {
            app.has_error = true
          },
          rememberMe: true,
          fetchUser: true
        })
      }
    }
  }
</script>
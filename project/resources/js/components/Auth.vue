<template>
    <div class="credentials" v-show="!loggedIn">
        <form>
            <div class="form-group">
                <label for="name-field">Naam</label>
                <input type="text" v-model="name" class="form-control" id="name-field" aria-describedby="emailHelp" placeholder="Kies een gebruikersnaam">
                <small id="emailHelp" class="form-text text-muted">Al een account? Klik na het invullen op de log in button</small>
            </div>
            <div class="form-group">
                <label for="password-field">Wachtwoord</label>
                <input type="password" v-model="password" class="form-control" id="password-field" placeholder="Password">
            </div>
            <a  v-on:click="newUserRequest"  class="btn btn-light" style='color: black;'>Registreer</a>
            <a @click="logInRequest()" class="btn btn-dark">Log in</a>
        </form>

    </div>
</template>
<script>
export default {
  name: 'Auth',
data() {
    return {
        username: null,
        name: null,
        password: null,
        loggedIn: false
    }
},
  methods: {
      newUserRequest() {
            if(this.name && this.password) {

                var handleSuccess = () => { this.loggedIn = true;}
                var handleFail = (error) => {console.log(error.message)}

                var signUpObject = {username: this.name , password: this.password};
                sinchClient.newUser(signUpObject)
                    .then(sinchClient.start.bind(sinchClient))
                    .then(() => {localStorage['sinchSession-' + sinchClient.applicationKey] = JSON.stringify(sinchClient.getSession());})
                    .then(handleSuccess)    
                    .fail(handleFail)     
            }
        },
        logInRequest() {
            if(this.name && this.password) {

                var signUpObject = {username: this.name , password: this.password};
                sinchClient.start(signUpObject)
                    .then(() => {localStorage['sinchSession-' + sinchClient.applicationKey] = JSON.stringify(sinchClient.getSession());})
                    .then(handleSuccess)
                    .fail(handleFail)
            }

        },
  }
    
}
</script>

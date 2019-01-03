<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default" style = ' color: white; letter-spacing: 2px;'>
                    <div class="card-header" style = 'background-color:rgb(127, 130, 160);' >Opzetten van een gesprek</div>

                    <div class="card-body" style = 'background-color:rgb(127, 130, 160, 0.7);'>
                    <form v-show="!loggedIn">
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
                    <set-call :loggedIn="loggedIn" :user="name"> </set-call>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import * as call from './call';
    // import Auth from './Auth';
    import setCall from './setCall';

    export default {
        data() {
            return {
                username: null,
                name: null,
                password: null,
                loggedIn: false,
            }
        },
        mounted() {
            console.log(test);
        },
        components: {
            setCall
        },
        methods : {
            newUserRequest() {
                console.log(this.name, this.password);

                if(this.name && this.password) {

                    var handleSuccess = () => {
                        console.log('User created')
                        this.loggedIn = true;
                        this.name = sinchClient.user.userId;
                        };
                    var handleFail = (error) => {console.log(error.message)};

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
                    var handleSuccess = () => { 
                            console.log('User logged in')
                            this.loggedIn = true;
                            this.name = sinchClient.user.userId;
                        };
                    var handleFail = (error) => {console.log(error.message)};
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

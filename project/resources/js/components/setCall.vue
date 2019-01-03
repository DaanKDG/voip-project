<template>
<div class="config-call" v-show="loggedIn">
    <div class="form-group">
        <p>Hey, {{this.user}}</p>                       
        <label for="exampleFormControlSelect1">Kies de locatie</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option style="padding: 20px !important;">Niky</option>
            <option>Lore</option>
            <option>Daan</option>
        </select>
    </div>
    <a v-on:click="makeCallRequest" class="btn btn-outline-light">Start gesprek</a>
</div>
       
</template>

<script>
export default {
  name: 'set-call',

  props: {
    loggedIn: {
      type: Boolean,
      default: false,
    },
    user: {
        type: String,
        default: "",
    }
  },
  methods: {
      makeCallRequest() {
          console.log(sinchClient.user.userId);
          var call = sinchClient.callUser('');
          call.addEventListener(); 
      }

  },
    
}
</script>


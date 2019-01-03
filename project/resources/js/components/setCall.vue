<template>
<div class="config-call" v-show="loggedIn">
    <div class="form-group">
        <p>Hey, {{this.user}}</p>                       
        <label for="recipient">Kies de locatie</label>
            <input type="text" v-model="location" class="form-control" id="recipient" placeholder="">

        <!-- <select v-model="location" class="form-control" id="exampleFormControlSelect1">
            <option style="padding: 20px !important;">Niky</option>
            <option>Lore</option>
            <option>Daan</option>
        </select> -->
    </div>
    <a v-on:click="makeCallRequest" class="btn btn-outline-light">Start gesprek</a>
    <div id="callLog"></div>

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
  data() {
      return {
          location: null,
          status: "some string",
      }
  },
  methods: {
    
      makeCallRequest() {
          if(this.location) {

             var callClient = sinchClient.getCallClient();
             var call = callClient.callUser(this.location);
             call.addEventListener(callListener);
                       
          }
      }

  },
    
}
</script>


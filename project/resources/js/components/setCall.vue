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
    <a href="#" v-on:click="takeCall" class="btn btn-light">Take the call</a>

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
      var callListener = {
      onCallProgressing: function(call) {
        console.log(call);
        $("div#callLog").append("<div>Ringing...</div>");
      },
      onCallEstablished: function(call) {
        // $("audio#incoming").attr("src", call.incomingStreamURL);
        $("div#callLog").append("<div>Call answered</div>");
      },
      onCallEnded: function(call) {
        // $("audio#incoming").removeAttr("src");
        // $("button#call").removeAttr("disabled");
        // $("button#answer").removeAttr("disabled");
        $("div#callLog").append("<div>Call ended</div>");
      }
    };
    Vue.use({
      install: function(Vue) {
        Object.defineProperty(Vue.prototype, "$callListener", {
          get() {
            return callListener;
          }
        });
      }
    });
     
       var callClient = this.$sinchClient.getCallClient();
    Vue.use({
      install: function(Vue) {
        Object.defineProperty(Vue.prototype, "$callClient", {
          get() {
            return callClient;
          }
        });
      }
    });
      return {
          location: null,
          status: "some string",
      }
  },
  mounted() {
    
 
    this.$sinchClient.startActiveConnection();

    this.$callClient.addEventListener({
    onIncomingCall: function(incomingCall) {
        //Play some groovy tunes & show UI
        $("div#callLog").append("<div>Receiving a call" + incomingCall.fromId + ".</div>");
        call = incomingCall;

        //Add event listeners to the new call object representing the incoming call
        call.addEventListener(this.$callListener);
    }
});

  },
  methods: {
    
      makeCallRequest() {
          if(this.location) {
            //   console.log(this.$callListener);
              
              var call = this.$callClient.callUser(this.location)
              
              call.addEventListener(this.$callListener);
            
            //   var call = callObj.callClient.callUser(this.location);
            //    call.addEventListener(callObj.callListener);
                       
          }
      },
      takeCall() {
          	try {
                    call.answer();
                    // $('button#answer').attr('disabled', 'disabled');
                    // $('button#call').attr('disabled', 'disabled');
            } catch(error) {
                console.log(error);
            }

      }

  },
    
}
</script>


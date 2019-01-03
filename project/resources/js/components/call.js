sinchClient = new SinchClient({
    applicationKey: '5d69f5a3-1809-4974-bffd-dff5de967a37',
    capabilities: {
         messaging: true,
         calling: true
         },
    supportActiveConnection: true,
    onLogMessage: function(msg) {
        console.log(msg);
    },
});

test = "Logging something";

sessionName = 'sinchSessionWEB-' + sinchClient.applicationKey;

callListener = {
	onCallProgressing: function(call) {
		$('div#callLog').append("<div>Ringing...</div>");
	},
	onCallEstablished: function(call) {
        $('audio#incoming').attr('src', call.incomingStreamURL);
		$('div#callLog').append("<div>Call answered</div>");
	},
	onCallEnded: function(call) {
        $('audio#incoming').removeAttr('src');
		$('button#call').removeAttr('disabled');
		$('button#answer').removeAttr('disabled');
		$('div#callLog').append("<div>Call ended</div>");
	}
}

callClient.addEventListener({
    onIncomingCall: function(incomingCall) {
    $('div#callLog').append("<div>Incoming call from " + incomingCall.fromId + "</div>");

    call = incomingCall;
    call.addEventListener(callListener);
    }
});


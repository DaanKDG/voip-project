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

var sessionName = 'sinchSessionWEB-' + sinchClient.applicationKey;

callListeners = {
	onCallProgressing: function(call) {
		// audioProgress.src = 'style/ringback.wav';
		// audioProgress.loop = true;
		// audioProgress.play();

        //Report call stats
        console.log("trying to call");
		this.status = "ringing";
	},
	onCallEstablished: function(call) {
		audioIncoming.srcObject = call.incomingStream;
		audioIncoming.play();
		audioProgress.pause();
		audioRingTone.pause();

		//Report call stats
		var callDetails = call.getDetails();
		$('div#callLog').append('<div id="stats">Answered at: '+(callDetails.establishedTime && new Date(callDetails.establishedTime))+'</div>');
	},
	onCallEnded: function(call) {
		audioProgress.pause();
		audioRingTone.pause();
		audioIncoming.srcObject = null;

		$('button').removeClass('incall');
		$('button').removeClass('callwaiting');

		//Report call stats
		var callDetails = call.getDetails();
		$('div#callLog').append('<div id="stats">Ended: '+new Date(callDetails.endedTime)+'</div>');
		$('div#callLog').append('<div id="stats">Duration (s): '+callDetails.duration+'</div>');
		$('div#callLog').append('<div id="stats">End cause: '+call.getEndCause()+'</div>');
		if(call.error) {
			$('div#callLog').append('<div id="stats">Failure message: '+call.error.message+'</div>');
		}
    }
}
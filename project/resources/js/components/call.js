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

var sessionName = 'sinchSessionWEB-' + sinchClient.applicationKey;

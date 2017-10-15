<script type="text/javascript" src="graph-js-sdk-web.js"></script>

var client = MicrosoftGraph.Client.init({
    authProvider: (done) => {
        done(null, "PassInAccessTokenHere");
    }
});

client
    .api('/me')
    .get((err, res) => {
        console.log(res); 
    });
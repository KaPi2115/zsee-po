var http = require('http');

http.get('http://www.google.pl', function(odpowiedzSerwera)
{
    odpowiedzSerwera.on('data', function(dataa_cos)
    {
        console.log(dataa_cos.toString());
    });
});
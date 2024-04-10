var curentTime = 0;
var interval = setInterval(function(){
    curentTime += 1000;
    console.log('currentTime' + currentTime/1000 + 's');
}, 1000);

setTimeout(function(){
clearInterval(interval);
}, 10000);
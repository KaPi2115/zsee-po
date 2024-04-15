function pokazInfo(callback){
    console.log('kurs node - callback');
    setTimeout(function(){callback();
    }, 3000);
}

pokazInfo(function(){
    console.log("callback - wywołany");
});
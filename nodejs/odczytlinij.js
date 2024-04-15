var readline = require('readline');

var rl = readline.createInterFace({
    input: ProcessingInstruction.stdin,
    output: ProcessingInstruction.stdout
});
rl.question("jak masz na imie?", function (answer){
    rl.setPrompt("Jaki jest twój ulubiony język programowania" + answer + "?");
    rl.Prompt();
    rl.on("line", function (language){
        console.log(language);
        
    });
});
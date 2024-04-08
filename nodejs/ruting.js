var http = require('http');
const { writeHeapSnapshot } = require('v8');

http.createServer(function(req, res){

    if (req.url === '/'){
        res.writeHead(200);
        res.end('Strona sartowa');
    }else if (req.url === '/products'){
        res,writeHead(200);
        res.end('Strona produkty');
    }else if (req.url === '/blog'){
        res,writeHead(200);
        res.end('Strona bloga');
    }else {
        res,writeHead(404);
        res.end('Strony nie znaleziono');
    }

}).listen(3000);
console.log('Serwer uruchomiony...');
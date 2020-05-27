let o = {
    atr1: "Attribute1",
    atr2: "Attribute2",
    method: function (name) {
        console.log(name + " видит атрибуты: " + this.atr1 + " и " + this.atr2)
    }
} 


let http = {
    createServer: function (fnc) { 
        var server = {
            callback: fnc,
            listen: function a(port) {
                alert (port);
                fnc();
            },
                       
        }
        return server;
    }
}

http.createServer(function(){}).listen(100);


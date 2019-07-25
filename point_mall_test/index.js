$.ajax({
    url: 'http://localhost:8003/items/',
    type: 'get',
    dataType: 'json'
}).done((json) => {
    console.log(json);
});

var xmlHttp = new XMLHttpRequest();
xmlHttp.onreadystatechange = function() { 
    if (xmlHttp.readyState == 4)
        console.log(xmlHttp.responseText);
}
xmlHttp.open("GET", 'http://localhost:8003/items/', true);
xmlHttp.send(null);

// $.ajax({
//     url: 'http://localhost:8003/items/',
//     type: 'get',
//     dataType: 'json'
// }).done((items) => {
//     console.log(items);
//     displayItems(items);
// });

// var xmlHttp = new XMLHttpRequest();
// xmlHttp.onreadystatechange = function() { 
//     if (xmlHttp.readyState == 4) {
//         const items = JSON.parse(this.responseText);
//         console.log(items);
//         displayItems(items);
//     }
// }
// xmlHttp.open("GET", 'http://localhost:8003/items/', true);
// xmlHttp.send(null);

function displayItems(items) {
    const itemListContainer = $('#item-list-container');
    itemListContainer.empty();
    for (const item of items) {
        const $itemContainer = $(`
        <div class="item-container">
            <img src="${item.image}" alt="">
            <div class="item-description">
                    <p>${item.title}</p>
                    <p>가격: ${item.price}</p>
            </div>
        </div>
        `);
        $itemContainer.appendTo(itemListContainer);
    }
}

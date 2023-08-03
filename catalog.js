var catalog = document.getElementById("catalog");

var sort = document.getElementsByName("sort");

var currentSort = "";

console.log(search);

for(let s of sort){
    s.addEventListener('focus', function(){
        currentSort = this.value
        GetProducts();
    })
}

GetProducts()

function GetProducts(){
    var flexBoxes = "";

    var minprice = parseInt(document.getElementById('pr1').value);
    var maxprice = parseInt(document.getElementById('pr2').value);

    var data = {
        minprice: minprice, 
        maxprice: maxprice,
        currentSort: currentSort,
        search: search
    }
    data = JSON.stringify(data);
    
    var xhr = new XMLHttpRequest();
    console.log(data);
    xhr.open("POST", "post/get-sorted-materials.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(data);

    xhr.onreadystatechange = function(){
        if(xhr.status != 200){
            return;
        }

        if(xhr.readyState == 4){
            console.log(this)
            var boxes = JSON.parse(this.responseText);
            for(var box of boxes){
                flexBoxes += 
                "<a href='product-card.php?id=" + box.id + "'>" + 
                    "<img src='" + box.img + "' alt='" + box.name + "'>" +
                    "<div class='flex-box'>" +
                        "<h2 class='ha'>" + box.name + "</h2>" +
                        "<h3>Цена: <b>" + box.price + "</b></h3>" +
                    "</div>" +
                "</a>"
            }
            catalog.innerHTML = flexBoxes;
            flexBoxes = ""
        }
    }
}

var interractionBtn = document.getElementById("product-interraction-btn");

if(interractionBtn != null){
    var materialIsInCart = interractionBtn.getAttribute("product-in-cart");
    var currentProductID = interractionBtn.getAttribute("product-id");
}

function AddProduct(id){
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "post/add-material.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(id);

    xhr.onreadystatechange = function(){
        if(xhr.status != 200){
            return;
        }

        if(xhr.readyState == 4){
            console.log(this.responseText)



            // var boxes = JSON.parse(this.responseText);
            // for(var box of boxes){
            //     flexBoxes += 
            //     "<a href='product-card.php?id=" + box.id + "'>" + 
            //         "<img src='" + box.img + "' alt='" + box.name + "'>" +
            //         "<div class='flex-box'>" +
            //             "<h2 class='ha'>" + box.name + "</h2>" +
            //             "<h3>Цена: <b>" + box.price + "</b></h3>" +
            //             "<h4>" + box.discription + "</h4>" +
            //         "</div>" +
            //     "</a>"
            // }
            // catalog.innerHTML = flexBoxes;
            // flexBoxes = ""
        }
    }
}

function IncreaseProduct(id){
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "post/increase-material.php", false);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(id);

    xhr.onreadystatechange = function(){
        if(xhr.status != 200){
            return;
        }

        if(xhr.readyState == 4){
            console.log(this.responseText)
            // var boxes = JSON.parse(this.responseText);
            // for(var box of boxes){
            //     flexBoxes += 
            //     "<a href='product-card.php?id=" + box.id + "'>" + 
            //         "<img src='" + box.img + "' alt='" + box.name + "'>" +
            //         "<div class='flex-box'>" +
            //             "<h2 class='ha'>" + box.name + "</h2>" +
            //             "<h3>Цена: <b>" + box.price + "</b></h3>" +
            //             "<h4>" + box.discription + "</h4>" +
            //         "</div>" +
            //     "</a>"
            // }
            // catalog.innerHTML = flexBoxes;
            // flexBoxes = ""
        }
    }
}

function InterractionButtonAddProduct(){
    AddProduct(currentProductID)
    materialIsInCart = true;

    UpdateInterractionButton()
}

function InterractionButtonIncreaseProduct(){
    IncreaseProduct(currentProductID)

    UpdateInterractionButton()
}

function UpdateInterractionButton(){
    if(!materialIsInCart){
        interractionBtn.addEventListener("click", InterractionButtonAddProduct)
        interractionBtn.innerText = "В корзину"
    }
    else{
        interractionBtn.removeEventListener("click", InterractionButtonAddProduct)

        interractionBtn.addEventListener("click", InterractionButtonIncreaseProduct)
        interractionBtn.innerText = "Увеличить кол-во"
    }
}

if(interractionBtn != null)
    UpdateInterractionButton()
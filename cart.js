var cart = document.getElementById("cart");

GetCart()

function GetCart(){
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "get/get-cart.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send();

    xhr.onreadystatechange = function(){
        if(xhr.status != 200){
            return;
        }

        if(xhr.readyState == 4){
            console.log(this.responseText)
            var cartMaterials = JSON.parse(this.responseText);

            console.log(cartMaterials);

            var currentCart = "";

            for(var material of cartMaterials){
                var last = {
                    method: material.kolvo > 1 ? "SubtractMaterial(" + material.id + ")" : "RemoveMaterial(" + material.id + ")",
                    text: material.kolvo > 1 ? "Удалить 1 шт." : "Удалить из корзины"
                }
                currentCart += 
                "<div id='cart-box'>" +
                    "<a href='product-card.php?id=" + material.material_id + "'>" + material.name + "</a>" +
                    "<p>Цена: " + material.price * material.kolvo + " руб.</p>" +
                    "(" + material.price + " руб. / шт.)" +
                    "<p>Количество: " + material.kolvo + " шт.</p>" +
                    "<button onclick='" + last.method + "'>" + last.text + "</button><br><br>" +
                    "<button onclick='RemoveMaterial(" + material.id + ")'>Удалить все</button>" +
                    "<button onclick='IncreaseProductInCart(" + material.material_id + ")'>Увеличить кол-во</button>" +
                "</div>"
            }

            cart.innerHTML = currentCart;
        }
    }
}

function RemoveMaterial(id){
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "post/remove-material.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(id);

    xhr.onreadystatechange = function(){
        if(xhr.status != 200){
            return;
        }

        if(xhr.readyState == 4){
            console.log(this.responseText)
            GetCart();
        }
    }
}

function SubtractMaterial(id){
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "post/subtract-material-kolvo.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.send(id);

    xhr.onreadystatechange = function(){
        if(xhr.status != 200){
            return;
        }

        if(xhr.readyState == 4){
            console.log(this.responseText)
            GetCart();
        }
    }
}

function IncreaseProductInCart(id){
    IncreaseProduct(id)
    GetCart()
}

if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready);
} else {
    ready();
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName("btn-danger");
    for (let i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i];
        button.addEventListener("click", removeCartItem);
    }

    var quantityInputs = document.getElementsByClassName("cart-quantity-input");
    for (let i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener("change", quantityChanged);
    }

    var addToCartButtons = document.getElementsByClassName("shop-item-button");
    for (let i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i];
        button.addEventListener("click", addToCartClicked);
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked);
}

function purchaseClicked() {
    storeCart();
    alert('The items have been moved to the cart page!');
    var cartItems = document.getElementsByClassName('cart-items')[0];
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild);
    }
    updateCartTotal();
}

function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal();
}

function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updateCartTotal();
}

function addToCartClicked(event) {
    var button = event.target;
    var shopItem = button.parentElement.parentElement;
    var title = shopItem.getElementsByClassName("shop-item-title")[0].innerText;
    var price = shopItem.getElementsByClassName("shop-item-price")[0].innerText;
    var imageSrc = shopItem.getElementsByClassName("shop-item-image")[0].src;
    addItemToCart(title, price, imageSrc);
    updateCartTotal();
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div');
    cartRow.classList.add('cart-row');
    var cartItems = document.getElementsByClassName('cart-items')[0];
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title');
    for (let i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart!');
            return;
        }

    }
    var cartRowContents = `
    <div class="cart-item cart-column">
        <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
        <span class="cart-item-title">${title}</span>
    </div>
    <span class="cart-price cart-column">${price}</span>
    <div class="cart-quantity cart-column">
        <input class="cart-quantity-input" type="number" value="1">
        <button class="btn btn-danger" type="button">REMOVE</button>
    </div>`;
    cartRow.innerHTML = cartRowContents;
    cartItems.append(cartRow);
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem);
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged);
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName("cart-items")[0];
    var cartRows = cartItemContainer.getElementsByClassName("cart-row");
    var total = 0;
    for (let i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i];
        var priceElement = cartRow.getElementsByClassName("cart-price")[0];
        var quantityElement = cartRow.getElementsByClassName(
            "cart-quantity-input"
        )[0];
        var price = parseFloat(priceElement.innerText.replace(" EUR", ""));
        var quantity = quantityElement.value;
        total = total + price * quantity;
    }
    total = Math.round(total * 100) / 100;
    document.getElementsByClassName("cart-total-price")[0].innerText =
        total + " EUR";
}

// cart

function finalizePurchase() {
    if (localStorage.getItem('shouldpurchase') && JSON.parse(localStorage.getItem('shouldpurchase')) && localStorage.getItem('cartitems')) {
        let sumprice = 0;
        let tbody = document.querySelector('#purchaseContent');
        let cartItems = JSON.parse(localStorage.getItem('cartitems'));
        console.log(cartItems);
        cartItems.forEach((cartItem, i) => {
            for (let count = 0; count < cartItem.count; count++) {
                tbody.innerHTML += `<tr> <td class="table-warning small-font">${cartItem.title}</td> <td class="table-warning small-font">${cartItem.price} EUR</td> <td class="table-warning small-font">${generateKey()}</td> </tr>`;
                sumprice = sumprice + cartItem.price;
            }
        });
        console.log(document.getElementById('purchaseModal'));
        let modal = new bootstrap.Modal(document.getElementById('purchaseModal'));
        modal.show();
        localStorage.setItem('cartitems', '[]');
        localStorage.setItem('shouldpurchase', false);
        document.getElementById('sumprice').innerHTML = sumprice + " EUR";
    }

}

function storeCart() {
    let cartItems = [];
    [...document.querySelectorAll('body > div > div.row.content > div > div.cart-items > div')].forEach((cartItem, i) => {
        cartItems.push({
            title: cartItem.querySelector('.cart-item-title').innerText,
            count: parseInt(cartItem.querySelector('.cart-quantity-input').value),
            price: parseInt(cartItem.querySelector('.cart-price').innerText.split(' ')[0]),
        });
    });
    localStorage.setItem('cartitems', JSON.stringify(cartItems));
    localStorage.setItem('shouldpurchase', true);
    return cartItems;
}

function generateKey() {
    function randInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min) + min);
    }

    let stringPool = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
    let parts = 5;
    let partLength = 4;
    let result = [];

    for (let part = 0; part < parts; part++) {
        let elem = "";
        for (let partElem = 0; partElem < partLength; partElem++) {
            elem += stringPool[randInt(0, stringPool.length)];
        }
        result.push(elem);
    }

    let key = result.join("-");
    return key;
}
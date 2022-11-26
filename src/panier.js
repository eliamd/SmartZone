let page = window.location.href;

let carts = document.querySelectorAll('.addpanier');


if(page.includes("produit")){
const pdrid = document.getElementById("pdrid");

const prdmarque = document.getElementById("prdmarque");

const prdlibele = document.getElementById("prdlibele");

const prdimg = document.getElementById("imagetel").src;


const prdprix = document.getElementById("prdprix");
prixfor = prdprix.textContent
prixfor = prixfor.substring(0, prixfor.length - 2);


let product = [
    {
        id: parseInt(pdrid.textContent),
        marque: prdmarque.textContent,
        nom: prdlibele.textContent,
        img: prdimg,
        prix: parseInt(prixfor),
        incart: 0,
    }
]


for (let i = 0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(product[i])
        totalcoat(product[i]);
    })
}
}

function onloadcard() {
    let productsNumbers = localStorage.getItem('cartNumbers');
    if (productsNumbers) {
        document.querySelector('.cartnbr').textContent = productsNumbers;
    }
}

function cartNumbers(product, action) {
    let productsNumbers = localStorage.getItem('cartNumbers');
    productsNumbers = parseInt(productsNumbers);

    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if( action ) {
        localStorage.setItem("cartNumbers", productsNumbers - 1);
        document.querySelector('.cartnbr').textContent = productsNumbers - 1;
    } else if( productsNumbers ) {
        localStorage.setItem("cartNumbers", productsNumbers + 1);
        document.querySelector('.cartnbr').textContent = productsNumbers + 1;
    } else {
        localStorage.setItem("cartNumbers", 1);
        document.querySelector('.cartnbr').textContent = 1;
    }
    setItem(product);
}

function setItem(product) {
    let cartitems = localStorage.getItem('productsInCart');
    cartitems = JSON.parse(cartitems);

    if (cartitems != null) {
        if (cartitems[product.id] == undefined) {
            cartitems = {
                ...cartitems,
                [product.id]: product
            }
        }
        cartitems[product.id].incart += 1;
    } else {
        product.incart = 1;
        cartitems = {
            [product.id]: product
        }
    }

    localStorage.setItem("productsInCart", JSON.stringify(cartitems));
}

function totalcoat(product, action) {
    let cartcost = localStorage.getItem('totalcost');

    if(action) {
        cartcost = parseInt(cartcost);

        localStorage.setItem("totalcost", cartcost - product.prix);
    } else if (cartcost != null) {
        cartcost = parseInt(cartcost)
        localStorage.setItem("totalcost", cartcost + product.prix);
    } else {
        localStorage.setItem("totalcost", product.prix)
    }
}


function displaycart() {
    let cartitems = localStorage.getItem('productsInCart');
    cartitems = JSON.parse(cartitems);

    let nbitems = localStorage.getItem('cartNumbers');
    let toatlpriceaff = localStorage.getItem('totalcost');


    let prdcon = document.querySelector(".prdcon");
    let affitems = document.querySelector(".affitems");
    let ttprice = document.querySelector(".totalprice");


    if (cartitems && prdcon) {
        prdcon.innerHTML = '';
        Object.values(cartitems).map(item => {
            prdcon.innerHTML +=  `
        <div id='${item.id}' class='product flex items-center hover:bg-gray-100 -mx-8 px-6 py-5'>
          <div class='flex w-2/5'>
            <div class='w-20'>
              <img class='h-24 w-[100%]' src='${item.img}' alt=''>
            </div>
            <div class='flex flex-col justify-between ml-4 flex-grow'>
            <span class='font-bold hidden'>${item.id}</span>
              <span class='font-bold text-sm'>${item.nom}</span>

              <span class='font-bold'>${item.marque}</span>
              <div class='retir font-semibold hover:text-red-500 text-gray-500 text-xs'>Retirer</div>
            </div>
          </div>
          <div class='flex justify-center w-1/5'>
            <svg class='decrease fill-current text-gray-600 w-3' viewBox='0 0 448 512'><path d='M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z'/>
            </svg>

            <span class='mx-2 border text-center w-10 px-0 py-2 rounded-sm bg-white'>${item.incart}</span>

            <svg class='increase fill-current text-gray-600 w-3' viewBox='0 0 448 512'>
              <path d='M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z'/>
            </svg>

          </div>
          <span class='text-center w-1/5 font-semibold text-sm'>${item.prix},00 €</span>
          <span class='text-center w-1/5 font-semibold text-sm'>${item.incart * item.prix},00 €</span>
        </div>
            `;
        })
    }

    if (cartitems && affitems) {
        var x = nbitems + " Articles"
        affitems.innerHTML = x;
    }

    if (cartitems && ttprice) {
        var z = toatlpriceaff + ",00 €"
        ttprice.innerHTML = z;
    }

    if(nbitems != 0){
        document.getElementById("orbtn").className = "bg-orange-500 font-semibold hover:bg-orange-600 py-3 text-sm text-white uppercase w-full rounded-md";
    }else {
        document.getElementById("orbtn").className = "bg-orange-400 font-semibold py-3 text-sm text-white uppercase w-full rounded-md cursor-not-allowed";
    }

    deleteButtons();
    manageQuantity();

}

function manageQuantity() {
    let decreaseButtons = document.querySelectorAll('.decrease');
    let increaseButtons = document.querySelectorAll('.increase');
    let currentQuantity = 0;
    let currentProduct = '';
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);


    for(let i=0; i < increaseButtons.length; i++) {
        decreaseButtons[i].addEventListener('click', () => {

            currentQuantity = decreaseButtons[i].parentElement.querySelector('span').textContent;
            currentProduct = decreaseButtons[i].parentElement.previousElementSibling.querySelector('span').textContent.toLocaleLowerCase().replace(/ /g,'').trim();


            if( cartItems[currentProduct].incart > 1 ) {
                cartItems[currentProduct].incart -= 1;
                cartNumbers(cartItems[currentProduct], "decrease");
                totalcoat(cartItems[currentProduct], "decrease");
                localStorage.setItem('productsInCart', JSON.stringify(cartItems));
                displaycart();
            }
        });

        increaseButtons[i].addEventListener('click', () => {
            currentQuantity = increaseButtons[i].parentElement.querySelector('span').textContent;
            currentProduct = increaseButtons[i].parentElement.previousElementSibling.querySelector('span').textContent.toLocaleLowerCase().replace(/ /g,'').trim();

            cartItems[currentProduct].incart += 1;
            cartNumbers(cartItems[currentProduct]);
            totalcoat(cartItems[currentProduct]);
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));
            displaycart();
        });
    }
}

function deleteButtons() {
    let deleteButtons = document.querySelectorAll('.retir');
    let productNumbers = localStorage.getItem('cartNumbers');
    let cartCost = localStorage.getItem("totalcost");
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    let productName;

    for(let i=0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener('click', () => {
            productName = deleteButtons[i].parentElement.querySelector('span').textContent.toLocaleLowerCase().replace(/ /g,'').trim();
           
            localStorage.setItem('cartNumbers', productNumbers - cartItems[productName].incart);
            localStorage.setItem('totalcost', cartCost - ( cartItems[productName].prix * cartItems[productName].incart));

            delete cartItems[productName];
            localStorage.setItem('productsInCart', JSON.stringify(cartItems));



            displaycart();
            onloadcard();
        })
    }
}

onloadcard();

if (page.includes("panier")) {
    displaycart()
}

let carts=document.querySelectorAll('.add-cart');
let products=[
{
    name:'Gray T-Shirt',
    tag:'Graytshirt',
    price:15,
    inCart:0

},
{
    name:'Blue T-Shirt',
    tag:'Bluetshirt',
    price:20,
    inCart:0

},
{
    name:'Yellow T-Shirt',
    tag:'Yellowtshirt',
    price:10,
    inCart:0

},
{
    name:'Lowers T-Shirt',
    tag:'Lowersshirt',
    price:25,
    inCart:0

}
]
for(let i=0;i<carts.length;i++){
    carts[i].addEventListener('click',()=>{
        cartNumbers(products[i]);
    });

}
function cartNumbers(product){
    
    
    let productNumbers=localStorage.getItem('cartNumbers');
    productNumbers=parseInt(productNumbers);
    if (productNumbers) {
        localStorage.setItem('cartNumbers',productNumbers+1)
        document.querySelector('.nav-item span').textContent=productNumbers+1;
    }
    else{
        localStorage.setItem('cartNumbers',1);
        document.querySelector('.nav-item span').textContent=1;
    }

    setItems(product);
     
}

function setItems(product){
    let cartItems = localStorage.getItem('productsInCart');
    console.log("My cartItems are", cartItems);
    product.inCart = 1;

 cartItems = {
    [product.tag] : product
} 

localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function onLoadCartNumbers(){
    let productNumbers=localStorage.getItem('cartNumbers');
    if (productNumbers) {
        document.querySelector('.nav-item span').textContent=productNumbers;
    }
}
onLoadCartNumbers();
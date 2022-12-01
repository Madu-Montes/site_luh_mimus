
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
    console.log(product);
    
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
    
}



function onLoadCartNumbers(){
    let productNumbers=localStorage.getItem('cartNumbers');
    if (productNumbers) {
        document.querySelector('.nav-item span').textContent=productNumbers;
    }
}
onLoadCartNumbers();

// document.getElementById("update_cart").onclick=update;
// function update(){
//     // make total value = the quantity you choose
// var quantity1=document.getElementById("quant1").value;
// document.getElementById("one1").innerText=quantity1;

// var quantity2=document.getElementById("quant2").value;
// document.getElementById("one2").innerText=quantity2;

// var quantity3=document.getElementById("quant3").value;
// document.getElementById("one3").innerText=quantity3;
//     // make subtotal=total of what you choose to buy
// var calc = quantity1*85+quantity2*70+quantity3*35;
// document.getElementById("subtotal").innerText=calc;
// document.getElementById("total").innerText=calc+45;
// }


document.getElementById("update_cart").onclick = update;

function update() {
    var tableRows = document.querySelectorAll(".table-body-row");

    var subtotal = 0;

    tableRows.forEach(function(row) {
        var quantityInput = row.querySelector(".product-quantity input");
        var priceElement = row.querySelector(".product-price");
        var quantity = parseInt(quantityInput.value) || 0;
        var price = parseInt(priceElement.textContent.slice(
            1));
        var total = quantity * price;
        row.querySelector(".product-total").textContent = "$" + total;
        subtotal += total;
    });

   
    document.getElementById("subtotal").textContent = "$" + subtotal;
    var total = subtotal + 45; 
    document.getElementById("total").textContent = "$" + total;
}
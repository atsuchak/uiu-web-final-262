let items = []
let totalPrice = 0, totalQuan = 0

function pass() {
    let input1 = document.getElementById('input1').value
    let input2 = Number(document.getElementById('input2').value)
    let input3 = Number(document.getElementById('input3').value)

    
    items.push(input1)
    
    totalPrice += input2*input3
    totalQuan += input3
    
    let discount = 0;
    if(totalPrice >= 5000) discount = totalPrice * 0.1
    else if(totalPrice >= 2000) discount = totalPrice * 0.05
    
    let vat = (totalPrice-discount)*0.05
    let grandTotal = totalPrice - discount + vat
    
    document.getElementById('output').innerText = `Items: [${items}], Qty: ${totalQuan}, Subtotal: ${totalPrice.toFixed(2)}, Discount: ${discount.toFixed(2)}, VAT: ${vat.toFixed(2)}, Grant Total: ${grandTotal.toFixed(2)}`
    
    if(totalQuan > 20) document.getElementById('output').innerText = `Items: [${items}], Qty: ${totalQuan}, Subtotal: ${totalPrice.toFixed(2)}, Discount: ${discount.toFixed(2)}, VAT: ${vat.toFixed(2)}, Grant Total: ${grandTotal.toFixed(2)}, Bulk order! Free delivery.`
    
    if(input1 === "" || input2 <= 0 || input3 <= 0) document.getElementById('output').innerText = `Invalid item!`
    
    document.getElementById('input1').value = ""
    document.getElementById('input2').value = ""
    document.getElementById('input3').value = ""

}
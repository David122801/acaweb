function openForm(menu) {
    document.getElementById("menuSelected").value = menu;
    document.getElementById("orderForm").style.display = "flex";
}

function closeForm() {
    document.getElementById("orderForm").style.display = "none";
}

document.getElementById("menuForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    const orderData = {
        menu: document.getElementById("menuSelected").value,
        documentType: document.getElementById("documentType").value,
        documentNumber: document.getElementById("documentNumber").value,
        fullName: document.getElementById("fullName").value,
        phoneNumber: document.getElementById("phoneNumber").value,
        email: document.getElementById("email").value,
        tableNumber: document.getElementById("tableNumber").value,
        serviceType: document.getElementById("serviceType").value
    };

    console.log("Pedido realizado:", orderData);
    closeForm();
});

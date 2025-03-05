function openForm(menu) {
    document.getElementById("menuSelected").value = menu;
    document.getElementById("orderForm").style.display = "flex";
}

function closeForm() {
    document.getElementById("orderForm").style.display = "none";
}

document.getElementById("menuForm").addEventListener("submit", function(event) {
    console.log("Formulario enviado");
});

document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("loginForm");

    form.addEventListener("submit", function(event) {
        // Obter os valores dos campos
        const login = form.login.value.trim();
        const senha = form.senha.value.trim();

        // Verificar se os campos estão vazios
        if (login === "" || senha === "") {
            alert("Por favor, preencha todos os campos.");
            event.preventDefault(); // Impedir o envio do formulário
        } else {
            // Se os campos estiverem preenchidos, o formulário será enviado
            console.log("Formulário pronto para envio");
        }
    });
});
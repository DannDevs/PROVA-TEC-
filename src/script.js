$(document).ready(function () {
    $("#formContato").validate({ // Validação Javascript forms
        rules: {
            nome: {
                required: true,
                minlength: 3
            },
            telefone: {
                required: true,
                minlength: 10
            },
            email: {
                required: true,
                email: true
            },
            mensagem: {
                required: true,
                minlength: 10
            }
        },
        messages: {
            nome: "Digite um nome válido.",
            telefone: "Digite um telefone válido.",
            email: "Digite um email válido.",
            mensagem: "A mensagem deve ter 10 caracteres."
        }
    });
});

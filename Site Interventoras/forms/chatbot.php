<?php
// Recebe a pergunta do usuário
$userInput = $_POST['userInput'];

// Respostas do chatbot (você pode adicionar mais respostas aqui)
$respostas = array(
    "Olá" => "Olá! Como posso ajudar você?",
    "Como vai?" => "Estou bem, obrigado! E você?",
    "Qual é o seu nome?" => "Meu nome é Mary.",
    "Qual é o sentido da vida?" => "Essa é uma pergunta profunda. A resposta pode ser 42!",
    "Outra pergunta" => "Outra resposta",
);

// Verifica se a pergunta do usuário tem uma resposta predefinida
if (array_key_exists($userInput, $respostas)) {
    echo $respostas[$userInput];
} else {
    echo "Desculpe, não entendi a pergunta.";
}
?>

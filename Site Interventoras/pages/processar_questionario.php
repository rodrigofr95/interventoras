<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha as respostas do formulário
    $resposta1 = $_POST["pergunta1"];
    $resposta2 = $_POST["pergunta2"];
    $resposta3 = $_POST["pergunta3"];
    $resposta4 = $_POST["pergunta4"];
    $resposta5 = $_POST["pergunta5"];
    $resposta6 = $_POST["pergunta6"];
    $resposta7 = $_POST["pergunta7"];
    $resposta8 = $_POST["pergunta8"];
    $resposta9 = $_POST["pergunta9"];
    $resposta10 = $_POST["pergunta10"];
    $resposta11 = $_POST["pergunta11"];
    $resposta12 = $_POST["pergunta12"];
    $resposta13 = $_POST["pergunta13"];

    // Abra ou crie um arquivo para armazenar as respostas
    $arquivo = "respostas.txt";
    $conteudo = "Pergunta 1: $resposta1\nPergunta 2: $resposta2\nPergunta 3: $resposta3\nPergunta 4: $resposta4\nPergunta 5: $resposta5\nPergunta 6: $resposta6\nPergunta 7: $resposta7\nPergunta 8: $resposta8\nPergunta 9: $resposta9\nPergunta 10: $resposta10\nPergunta 11: $resposta11\nPergunta 12: $resposta12\nPergunta 13: $resposta13\n";

    // Adicione as respostas ao arquivo
    if (file_put_contents($arquivo, $conteudo, FILE_APPEND | LOCK_EX) !== false) {
        echo "Respostas salvas com sucesso!";
    } else {
        echo "Erro ao salvar as respostas.";
    }
}
?>

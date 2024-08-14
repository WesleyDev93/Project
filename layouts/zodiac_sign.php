<?php

// Função para converter uma data no formato dd/mm para um formato que possa ser comparado, incluindo o ano
function convertDate($date, $year) {
    return DateTime::createFromFormat('d/m/Y', $date . '/' . $year);
}

// Carrega o XML
$xml = simplexml_load_file('signos.xml');

// Recebe a data de nascimento do formulário
$data_nascimento = $_POST['data_nascimento'];
$data_nascimento_formatada = DateTime::createFromFormat('Y-m-d', $data_nascimento);

// Extrai o ano da data de nascimento
$ano_nascimento = $data_nascimento_formatada->format('Y');

// Variável para armazenar o signo encontrado
$signo_encontrado = null;

foreach ($xml->signo as $signo) {
    $dataInicio = convertDate((string)$signo->dataInicio, $ano_nascimento);
    $dataFim = convertDate((string)$signo->dataFim, $ano_nascimento);

    // Verifica se a data de nascimento está entre as datas de início e fim
    if ($data_nascimento_formatada >= $dataInicio && $data_nascimento_formatada <= $dataFim) {
        $signo_encontrado = $signo;
        break;
    }
}

// Exibe o resultado
if ($signo_encontrado) {
    echo "<h1>Seu Signo: " . $signo_encontrado->signoNome . "</h1class=text-center>";
    echo "<p>" . $signo_encontrado->descricao . "</p>";
} else {
    echo "<h1>Signo não encontrado.</h1>";
}
?>

<?php
function get_signo($data_nascimento) {
    $data = DateTime::createFromFormat('d/m/Y', $data_nascimento);
    $mes = (int)$data->format('m');
    $dia = (int)$data->format('d');

    if (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19)) {
        return 'Áries';
    } elseif (($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20)) {
        return 'Touro';
    } elseif (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 21)) {
        return 'Gêmeos';
    } elseif (($mes == 6 && $dia >= 22) || ($mes == 7 && $dia <= 22)) {
        return 'Câncer';
    } elseif (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22)) {
        return 'Leão';
    } elseif (($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22)) {
        return 'Virgem';
    } elseif (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)) {
        return 'Libra';
    } elseif (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)) {
        return 'Escorpião';
    } elseif (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)) {
        return 'Sagitário';
    } elseif (($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 19)) {
        return 'Capricórnio';
    } elseif (($mes == 1 && $dia >= 20) || ($mes == 2 && $dia <=18)) {
        return 'Aquário';
    } else {
        return 'Peixes';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se o formulário foi enviado
    if (isset($_POST['data_nascimento'])) {
        // Obtém a data de nascimento do formulário
        $data_nascimento = $_POST['data_nascimento'];

        // Obtém o signo com base na data de nascimento
        $signo = get_signo($data_nascimento);

        // Exibe o resultado
        echo "O seu signo é: " . $signo;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Descubra o seu signo</title>
</head>
<body>
	<h1>Descubra o seu signo</h1>

	<form method="post">
		<label>Data de nascimento:</label>
		<input type="text" name="data_nascimento" placeholder="dd/mm/aaaa">
		<button type="submit">Descobrir</button>
	</form>
</body>
</html>
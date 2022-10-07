<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesigno.css">
    <title>Descubra seu signo!</title>
</head>

<header>
    <div id="container">
        <div class="neon-circle">
            <div class="sign-one">
                Aquário<br>
                <div class="and">&</div>
                Peixes
            </div>
        </div>
    </div>

    <div id="container">
        <div class="sign-two">
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            <div class="off">Á</div>RIES<br>
            <i class="fa fa-heart-o" aria-hidden="true"></i>
            TOU<div class="off">R</div>O<br>
            <i class="fa fa-heart-o heart-off" aria-hidden="true"></i>
            GEMEOS<br>
        </div>
    </div>

    <div id="container">
        <div class="sign-three">
            <div class="restaurant">Cancer</div>
            <div class="jackpots">LEÃO</div>
            <i class="fa fa-heart-o heart-off" aria-hidden="true"></i>
            <div class="bar">Virgem</div>
        </div>
    </div>

    <div id="container">
        <div class="sign-four">Libra<br>
            <div class="sign-four">Escorpião<br>
                <div class="sign-four">Sagitário<br>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
</header>

<body>
    <div class="bodyback">
        <h2>Fórum Programação Web</h2>
        <h3>Informe sua data de nascimento para verificar seu signo:</h3>
        <form method="POST">
            <label for="dia">Informe sua data de nascimento:</label>
            <input type="date" id="dia" name="dia" value="1942-01-01" max="2023-12-31">
            <input type="submit" value="Verificar qual é seu signo!">
        </form>
    </div>
</body>

</html>

<?php
//Receber a data do formulário
$data = $_POST['dia'];

//Capturar mês e dia:
$data = date('d/m/Y', strtotime($data));
$mes = substr($data, 3, 2);
$dia = substr($data, 0, 2);
// validando data; echo $dia."/".$mes."<br>";
echo "<hr></hr>";
//carregado xml com simplexml_load_file, e convertido ele em objeto
$xml = simplexml_load_file('arquivo.xml');
if ($mes == "03") {
    //Áries: 21/03 a 20/04	  
    if ($dia >= "21") {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Áries->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Áries->descricao;
    } else {
        echo "<h1>Seu signo é</h1> " . $xml->Peixes->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Peixes->descricao;
    }
} elseif ($mes == "04") {
    //Touro: 21/04 a 20/05	  
    if ($dia >= "21") {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Touro->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Touro->descricao;
    } else {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Áries->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Áries->descricao;
    }
} elseif ($mes == "05") {
    //Gêmeos: 21/05 a 20/06	  
    if ($dia >= "21") {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Gemeos->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Gemeos->descricao;
    } else {
        echo "<h1>Seu signo é</h1> " . $xml->Touro->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Touro->descricao;
    }
} elseif ($mes == "06") {
    //Câncer: 21/06 a 21/07	  
    if ($dia >= "21") {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Câncer->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Câncer->descricao;
    } else {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Gemeos->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Gemeos->descricao;
    }
} elseif ($mes == "07") {
    //Leão: 22/07 a 22/08	  
    if ($dia >= "22") {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Leão->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Leão->descricao;
    } else {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Câncer->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Câncer->descricao;
    }
} elseif ($mes == "08") {
    //Virgem: 23/08 a 22/09	  
    if ($dia >= 23) {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Virgem->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Virgem->descricao;
    } else {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Leão->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Leão->descricao;
    }
} elseif ($mes == "09") {
    //Libra: 23/09 a 22/10
    if ($dia >= "23") {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Libra->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Libra->descricao;
    } else {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Virgem->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Virgem->descricao;
    }
} elseif ($mes == "10") {
    //Escorpião: 23/10 a 21/11	
    if ($dia >= "23") {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Escorpião->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Escorpião->descricao;
    } else {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Libra->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Libra->descricao;
    }
} elseif ($mes == "11") {
    //Sagitário: 22/11 a 21/12	  
    if ($dia >= "22") {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Sagitário->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Sagitário->descricao;
    } else {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Escorpião->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Escorpião->descricao;
    }
} elseif ($mes == "12") {
    //Capricórnio: 22/12 a 20/01
    if ($dia >= "22") {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Capricórnio->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Capricórnio->descricao;
    } else {
        echo "<h1>Seu signo é</h1>" . "<h1>" . $xml->Sagitário->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Sagitário->descricao;
    }
} elseif ($mes == "01") {
    //Aquário: 21/01 a 19/02
    if ($dia >= "21") {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Aquário->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Aquário->descricao;
    } else {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Capricórnio->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Capricórnio->descricao;
    }
} else {
    //Peixes: 20/02 a 20/03		
    if ($dia >= "20") {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Peixes->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Peixes->descricao;
    } else {
        echo "<h1>Seu signo é</h1> " . "<h1>" . $xml->Aquário->signoNome . "</h1>" . "<hr></hr>" .
            "<h1> As caractesticas de seu signo são:</h1>" . $xml->Aquário->descricao;
    }
}
?>

<!--/RodapéFooter-->
<br>
<br>
<footer>
    <div class="footerlogo">
        <a href="https://github.com/xlDuarte" target="_blank">
            <img class="tm-social" src="https://i.imgur.com/YJz6dJ9.png" width="35" height="35" alt="Logo do github">
        </a>
    </div>
    <div class="footer">
        <p class="text-center">
            Todos os direitos reservados: Gabriel Reis Duarte &copy
        </p>
    </div>
</footer>
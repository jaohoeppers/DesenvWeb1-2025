<?php
    $salario1 = 10;
    $salario2 = 20;

    // if ($salario1 > $salario2) {
    //     echo("O valor da variavel 1 é maior que o valor da variavel 2 <br>");
    // }else if($salario1 < $salario2){
    //     echo("O valor da variavel 1 é menor que o valor da variavel 2 <br>");
    // }else{
    //     echo("Os valores são iguais <br>");
    // }

    // for( $x = 0; $x < 99; $x++){
    //     ++$salario1;
    //     if( $x == 50){
    //         break;
    //     }
    // }
    // echo("O valor da variavel salario1 é: ". $salario1."<br>");

    // $idade = array("joao" => 'teste', "maria"=> 'maria');
    // foreach ($idade as $key => $value) {
    //     echo("nome: ". $key ." valor: ". $value);
    // }

    // $disciplinas = array("prog dev web"=>array("cleber","julio"), "algoritmos"=>array("mateus","reinaldo"));

    // foreach ($disciplinas as $key => $value) {
    //     echo "Disciplina: ". $key . " professores: ";
    //     foreach ($value as $nome) {
    //         echo $nome . ", ";
    //     }
    //     echo "<br>";
    // }

    $tabela = array(
        array("Disciplina"=>"prog devweb", "Nota"=>7, "Faltas"=>2),
        array("Disciplina"=>"logica", "Nota"=>9, "Faltas"=>0),
        array("Disciplina"=>"portugues", "Nota"=>8, "Faltas"=>5),
        array("Disciplina"=>"matematica", "Nota"=>6, "Faltas"=>3),
    );

    echo "<html><head><head><body><table>
        <tr>
            <th>Disciplina</th>
            <th>Nota</th>
            <th>Faltas</th>
        <tr>
    ";

    foreach ($tabela as $disciplina) {
        echo "
            <tr>
                <td> ". $disciplina['Disciplina'] . "</td>
                <td> ". $disciplina['Nota'] . "</td>
                <td> ". $disciplina['Faltas'] . "</td>
            </tr>
        ";
    }
    echo "</table></body></html>";
?>
<?php

    global $host, $user, $password, $database;
    $host = 'localhost';
    $user = 'usuariodevweb';
    $password = '123';
    $database = 'devweb';

    global $connection;
    $connection = conectarSGDB();

    function conectarSGDB() {
        global $host, $user, $password, $database;
        return mysqli_connect($host, $user, $password, $database);
    }

    function salvarRegistro($nome, $sobrenome, $email, $senha, $cidade, $estado) {
        global $connection;
        global $host, $user, $password, $database;

        if($connection){
            echo "Conexão com o banco de dados realizada com sucesso!";

            $resultInsert = mysqli_query($connection, "INSERT INTO TBPESSOA (pesnome,
                                                                            pessobrenome,
                                                                            pesemail,
                                                                            pespassword,
                                                                            pescidade,
                                                                            pesestado) 
                                                        VALUES ('$nome',
                                                                '$sobrenome',
                                                                '$email',
                                                                '$senha',
                                                                '$cidade',
                                                                '$estado'
                                                            )
                                            ");
            if($resultInsert){
                echo "<br>Registro inserido com sucesso!";
            }echo("<button onclick='location.href=\"listarRegistros.php\"'>Listar Registros</button>");

        } else {
            echo "Erro na conexão com o banco de dados.";
        }
    }

    function mostraQuantRegistros() {
        global $connection;
        $result = mysqli_query($connection, "SELECT COUNT(*) AS QTD FROM TBPESSOA");
        echo "Total de registros na tabela TBPESSOA: " . mysqli_fetch_assoc($result)["QTD"] . "<br><br>";
    }

    function listarRegistros() {
        global $connection;
        $result = mysqli_query($connection, "SELECT * FROM TBPESSOA");
        if($result){
            echo("<table border='1'>");
            echo("<tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                </tr>");
            while($row = mysqli_fetch_assoc($result)){
                echo("<tr>");
                echo("<td>" . $row["pesid"] . "</td>");
                echo("<td>" . $row["pesnome"] . "</td>");
                echo("<td>" . $row["pessobrenome"] . "</td>");
                echo("<td>" . $row["pesemail"] . "</td>");
                echo("<td>" . $row["pespassword"] . "</td>");
                echo("<td>" . $row["pescidade"] . "</td>");
                echo("<td>" . $row["pesestado"] . "</td>");
                echo("</tr>");
            }
            echo("</table>");
        }
    }

    function buscaPorNome($nome) {
        global $connection;
        $result = mysqli_query($connection, "SELECT * FROM TBPESSOA WHERE pesnome ILIKE '%$nome%'");
        if($result){
            echo("<table border='1'>");
            echo("<tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                </tr>");
            while($row = mysqli_fetch_assoc($result)){
                echo("<tr>");
                echo("<td>" . $row["pesid"] . "</td>");
                echo("<td>" . $row["pesnome"] . "</td>");
                echo("<td>" . $row["pessobrenome"] . "</td>");
                echo("<td>" . $row["pesemail"] . "</td>");
                echo("<td>" . $row["pespassword"] . "</td>");
                echo("<td>" . $row["pescidade"] . "</td>");
                echo("<td>" . $row["pesestado"] . "</td>");
                echo("</tr>");
            }
            echo("</table>");
        }
    }


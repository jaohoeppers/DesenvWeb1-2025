<?php

    function calcularMedia($notas) {
        $soma = array_sum($notas);
        $media = $soma / count($notas);
        return $media;
    }

    function calcularFrequencia($presencas) {
        $totalAulas = count($presencas);
        $aulasPresentes = array_sum($presencas);
        $frequencia = $aulasPresentes / $totalAulas * 100;
        return $frequencia;
    }

    function verificaMedia($media) {
        return $media >= 7;
    }

    function verificaFrequencia($frequencia) {
        return $frequencia >= 70;
    }

    function verificaAluno($media, $frequencia) {
        if (verificaMedia($media) && verificaFrequencia($frequencia)) {
            return "Aprovado por media e frequência";
        } elseif (verificaMedia($media) && !verificaFrequencia($frequencia)) {
            return "Reprovado por frequência";
        } elseif (!verificaMedia($media) && verificaFrequencia($frequencia)) {
            return "Reprovado por média";
        } else{
            return "Reprovado por média e frequência";
        }
    }

?>
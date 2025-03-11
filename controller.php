<?php
$maiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$minusculas = 'abcdefghijklmnopqrstuvwxyz';
$numeros = '0123456789';
$simbolos = '!@#$%&*()_+=';
$tamanho = $_POST['tamanho'] ?? 8;

$senha = str_shuffle($maiusculas);
$senha .= str_shuffle($minusculas);
$senha .= str_shuffle($numeros);
$senha .= str_shuffle($simbolos);

$senha = substr(str_shuffle($senha), 0, $tamanho);

<?php

require 'vendor/autoload.php'; // Pega automaticante todas as classes gerenciáveis pelo composer

use GuzzleHttp\Client; // Conforme documento do guzzle
use Symfony\Component\DomCrawler\Crawler; // Conforme doc do crawler

$client = new Client(); // Cria variável que guarda uma função do guzzle
$resposta = $client->request(method: 'GET', url:'https://www.alura.com.br/cursos-online-programacao/php'); // Guarda os dados requisitados com a variável

$html = $resposta->getBody(); // Seleciona os dados que serão utilizados pelo requisição

$crawler = new Crawler($html);

$cursos = $crawler->filter(selector:'span.card-curso__nome'); // Estou filtrando os elementos do html do url

foreach  ($cursos as $curso) {
    echo $curso->textContent . PHP_EOL;
}
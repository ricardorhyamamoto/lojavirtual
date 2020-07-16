<?php

include_once ( __DIR__ . '/crud_produtos.php');

$registros = read();

$html = '';
foreach ($registros as $registro) {
    $html .= "<tr>
                <th scope='row'>{$registro['id']}</th>
                <td>{$registro['nome_produto']}</td>
                <td>{$registro['descricao']}</td>
                <td>{$registro['valor']}</td>    
              </tr>";
}

echo $html;
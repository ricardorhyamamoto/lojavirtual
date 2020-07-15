<?php

include_once ( __DIR__ . '/crud.php');

$registros = read();

$html = '';
foreach ($registros as $registro) {
    $html .= "<tr>
                <td>{$registro['id']}</td>
                <td>{$registro['nome']}</td>
                <td>{$registro['email']}</td>
                <td>{$registro['cidade']}</td>
                <td>{$registro['estado']}</td>    
              </tr>";
}

echo $html;
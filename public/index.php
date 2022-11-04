<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Petshop\Core\DB;

//$sql = 'INSERT INTO dicas (titulo, descricao) VALUES (?, ?)';
//$s = DB::query($sql, ['Dica 1', 'Descrição dica 01']);

//echo 'Linhas afetadas: ' . $s->rowCount();
//echo 'ID alocado: ' . DB::getInstance()->lastInsertId();

//$estados = DB::select('select * from estados where uf = ?',
//['RS']);
//var_dump($estados);

echo date('d/m/Y H:i:s');
//echo '<br>';
//echo FRONTEND_TITLE;
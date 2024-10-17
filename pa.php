<?php 
$link = mysql_connect('mysql://root:eDQEddaNHGkqdfXBJMvXlbfrgihLNMHp@autorack.proxy.rlwy.net:21948/railway');
if (!$link) {
	  die('Não pode ser conectado: ' . mysql_error());
}
echo 'Conexão com sucesso';
mysql_close($link);
?>
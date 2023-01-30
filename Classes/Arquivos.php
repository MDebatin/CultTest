<?php

class Arquivos {
private $conexao;

public function __construct() {
// Construtor da classe, cria uma nova conexão com o banco de dados.
$this->conexao = new Conexao();
}

public function listarArquivos() {
// Lista todos os arquivos do usuário logado
$username = $_SESSION['username'];
$sql = "SELECT * FROM files WHERE username='$username'";
$result = $this->conexao->query($sql);
$arquivos = array();
while($row = $this->conexao->fetchAssoc($result)){
$arquivos[] = $row;
}
return $arquivos;
}

public function enviarArquivo($nomeArquivo, $tamanhoArquivo) {
// Insere um novo arquivo no banco de dados
$username = $_SESSION['username'];
$sql = "INSERT INTO files (username, name, size, downloads) VALUES ('$username', '$nomeArquivo', $tamanhoArquivo, 0)";
return $this->conexao->query($sql);
}

public function baixarArquivo($id) {
// Faz o download de um arquivo específico e atualiza a contagem de downloads no banco de dados
$sql = "SELECT * FROM files WHERE id=$id";
$result = $this->conexao->query($sql);
$arquivo = $this->conexao->fetchAssoc($result);
$caminhoArquivo = 'uploads/' . $arquivo['name'];

if (file_exists($caminhoArquivo)) {
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . basename($caminhoArquivo));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize('uploads/' . $arquivo['name']));
readfile('uploads/' . $arquivo['name']);

// Atualizar contagem de downloads
$novaContagem = $arquivo['downloads'] + 1;
$sql = "UPDATE files SET downloads=$novaContagem WHERE id=$id";
$this->conexao->query($sql);
exit;
}
}

public function excluirArquivo($id) {
// Exclui um arquivo específico do banco de dados
$sql = "DELETE FROM files WHERE id='$id'";
return $this->conexao->query($sql);
}
}

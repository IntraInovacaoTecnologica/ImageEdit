    <form  id="formulario" autocomplete="off" method="post" name="form1" enctype="multipart/form-data" action="index.php">
        <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
        <div id="area">
        <fieldset>
            <legend align="center">Upload de Imagem</legend>
            <br>
            <strong>Imagem:</strong>
            <input type="file" name="img" id="img" /> <br><br>
            <label>Largura:<input type="number" name="width"></label><br><br>
            <label>Altura:&nbsp <input type="number" name="height"></label><br><br>
            <input class="btn_submit" type="submit" value="Enviar" />
            <!-- Determinamos via HTML um tamanho máximo para a nossa imagem-->
            <input type="hidden" name="MAX_FILE_SIZE" value="1024000" />
        </fieldset>
        </div>
    </form>


<?php

if(!empty($_FILES)){ // Se o array $_FILES não estiver vazio

    // Incluímos o arquivo com a classe
    include 'classupload.php';

    // Associamos a classe à variável $upload
    $upload = new UploadImagem();

    // Determinamos nossa largura máxima permitida para a imagem
    $upload->width = $_REQUEST['width'];

    // Determinamos nossa altura máxima permitida para a imagem
    $upload->height = $_REQUEST['height'];

// Exibimos a mensagem com sucesso ou erro retornada pela função salvar.
//Se for sucesso, a mensagem também é um link para a imagem enviada.
    echo $upload->salvar("C:\Users\wellington.jesus\Documents\upload\\", $_FILES['img']);

}

/*
$testGD = get_extension_funcs("gd"); // Grab function list
if (!$testGD) {
    echo "GD not even installed.";
    exit;
}
echo "<pre>" . print_r($testGD, true) . "</pre>";

*/
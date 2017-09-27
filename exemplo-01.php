<?php

$link = "https://www.google.com.br/logos/doodles/2017/googles-19th-birthday-5117501686939648.5-l.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse['path']); //pega o pelo nome arquivo Ex: img.png

$file = fopen($basename, "w+"); //cria o arquivo com o nome que pegou e w+ pra criar ele

fwrite($file, $content); //escreve no arquivo o binario pegado pelo link

fclose($file);

?>

<img src="<?=$basename?>"> <!--pega na tag img o nome basename. é o mesmo nome do arquivo que criamos-->
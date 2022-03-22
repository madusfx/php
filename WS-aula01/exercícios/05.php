<!-- Criar uma variável no PHP chamada $link contendo o valor 'http://www.utfpr.edu.br' e uma segunda variável chamada $label, 
que será o título do link com o valor 'UTFPR'. Em seguida, você deve renderizar via PHP (função echo) um link HTML usando as variáveis $link e $titulo,
e os conceitos de interpolação e renderização de variáveis em strings no PHP. -->

<?php 
    $link = 'http://www.utfpr.edu.br';
    $label = 'UTFPR';
    echo "Acesse o site da <a href=$link> $label </a>";
?>
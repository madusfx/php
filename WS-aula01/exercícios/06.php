<html>
    <?php
        $titulo = "Minha Página";
        $campo = "text";
        $value = "um formulário";
    ?>
    <head>
        <title><?php echo $titulo; ?></title>
    </head>
    <body>
        <p>Campo para um texto</p>
        <input type="<?php $campo; ?>" value="<?php $value; ?>"/>
    </body>
</html>
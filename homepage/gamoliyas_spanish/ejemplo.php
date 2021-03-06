<?php
    //Se configura el BBClone:
    define("_BBC_PAGE_NAME", "spanish example online");
    define("_BBCLONE_DIR", "../bbclone/");
    define("COUNTER", _BBCLONE_DIR."mark_page.php");
    if (is_readable(COUNTER)) include_once(COUNTER);
?>
<html>
    <head>
        <title>C&oacute;mo insertar el juego Gamoliyas en otra p&aacute;gina</title>
        <style type="text/css">
        <!--
            h1 { color:#00ff00; font-family:verdana; text-align:center; }
            h2 { color:#00aa00; }
        -->
        </style>
    </head>
    <body bgcolor="#003300" text="#ffffff">
        <center><h1 align="center">C&oacute;mo insertar el juego Gamoliyas en otra p&aacute;gina</h1></center>
        <center>
            <iframe src="index.php?hidemenu=1&hidecontrols=1&hideinfo=1&undrawable=1&play=1&world=111010101010111010011101010110011&width=20&height=20&spherical=1&speed=333&multicolor=1" width="382" height="378" scrolling="no" frameborder="0"></iframe>
        </center>
        <h2>C&oacute;digo:</h2>
        <div style="font-weight:bold; font-family:terminal; font-size:12px; color:#bbbbbb;">
            <code>&lt;iframe src=&quot;index.htm?hidemenu=1&amp;hidecontrols=1&amp;hideinfo=1&amp;undrawable=1&amp;play=1&amp;world=111010101010111010011101010110011&amp;width=20&amp;height=20&amp;spherical=1&amp;speed=333&amp;multicolor=1&quot; width=&quot;382&quot; height=&quot;378&quot; scrolling=&quot;no&quot; frameborder=&quot;0&quot;&gt;&lt;/iframe&gt;</code>
        </div>
        <h2>Notas</h2>
        <ul>
            <li>&Eacute;ste c&oacute;digo es s&oacute;lo un ejemplo y puede ser modificado para ser adaptado a diferentes necesidades.</li>
            <li>Hay otras formas de insertar el juego que no son con <code>&lt;iframe&gt;</code>.</li>
            <li>La direcci�n (URL) del par&aacute;metro <code>src</code> puede ser generada por el propio juego en la opci&oacute;n de <b>guardar mundo</b>.</li>
            <li>Si se le pasa un mapa (par&aacute;metro <code>world</code>) m&aacute;s peque&ntilde;o de lo que especifican los par&aacute;metros <code>width</code> y <code>height</code>, el resto del mapa que falte se rellenar&aacute; con casillas vac&iacute;as.</li>
            <li>Como autor lo &uacute;nico que exijo para su uso es que se respete mi autor&iacute;a y no se modifiquen las partes del juego en las que aparezca mi nombre.</li>
        </ul>
    </body>
</html>

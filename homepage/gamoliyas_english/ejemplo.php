<?php
    //Se configura el BBClone:
    define("_BBC_PAGE_NAME", "english example online");
    define("_BBCLONE_DIR", "../bbclone/");
    define("COUNTER", _BBCLONE_DIR."mark_page.php");
    if (is_readable(COUNTER)) include_once(COUNTER);
?>
<html>
    <head>
        <title>How to insert Gamoliyas game inside other page</title>
        <style type="text/css">
        <!--
            h1 { color:#00ff00; font-family:verdana; text-align:center; }
            h2 { color:#00aa00; }
        -->
        </style>
    </head>
    <body bgcolor="#003300" text="#ffffff">
        <center><h1 align="center">How to insert Gamoliyas game inside other page</h1></center>
        <center>
            <iframe src="index.php?hidemenu=1&hidecontrols=1&hideinfo=1&undrawable=1&play=1&world=111010101010111010011101010110011&width=20&height=20&spherical=1&speed=333&multicolor=1" width="382" height="378" scrolling="no" frameborder="0"></iframe>
        </center>
        <h2>Code:</h2>
        <div style="font-weight:bold; font-family:terminal; font-size:12px; color:#bbbbbb;">
            <code>&lt;iframe src=&quot;index.htm?hidemenu=1&amp;hidecontrols=1&amp;hideinfo=1&amp;undrawable=1&amp;play=1&amp;world=111010101010111010011101010110011&amp;width=20&amp;height=20&amp;spherical=1&amp;speed=333&amp;multicolor=1&quot; width=&quot;382&quot; height=&quot;378&quot; scrolling=&quot;no&quot; frameborder=&quot;0&quot;&gt;&lt;/iframe&gt;</code>
        </div>
        <h2>Notes</h2>
        <ul>
            <li>This code is just an example and can be modified and adapted to the different necessities.</li>
            <li>There are other ways to insert the game without <code>&lt;iframe&gt;</code>.</li>
            <li>The address (URL) from <code>src</code> parameter can be generated by the own game with the <b>save world</b> option.</li>
            <li>If you use a map (<code>world</code> parameter) shortest than the parameters <code>width</code> and <code>height</code> are specifying, the rest of the map that lacks will fill up with blank cells.</li>
            <li>Like the game author, the only thing which I demand for its use is that don't delete or modify the parts of the game which appears my name.</li>
        </ul>
    </body>
</html>

<?php

use metaxiii\blog\Article;

function show($list)
{
    foreach ($list as $el) {
        $el = new Article($el);
        echo "<div class='col-12 border rounded bg-success p-4 m-2'>";
        echo "<a href='{$el->getSlug()}' class='custom-link'><h3>{$el->getTitre()}</h3></a>";
        echo "<a href='{$el->getSlug()}' class='custom-link'><p>{$el->getContent()}</p></a>";
        echo "<div class='row'>";
        echo "<div class='col-6'>";
        echo "<button class='btn btn-primary'>Lire l'article</button>";
        echo "</div>";
        echo "<div class='col-6'>";
        echo "<p class='text-right font-italic small red'>{$el->getDate()}</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}
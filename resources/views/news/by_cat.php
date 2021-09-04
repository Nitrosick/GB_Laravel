<?php
    foreach ($news as $value) {
        echo "
            <h2><a href='/single_new/{$value['id']}'>{$value['title']}</a></h2>
            <p>{$value['description']}</p><br>
            <i>Автор: {$value['author']}</i><br><br>
        ";
    }
?>

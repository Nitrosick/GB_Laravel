<?php
    echo "<ul>";

    foreach ($categoriesArray as $value) {
        echo "
            <li><a href='/news/{$value['id']}'>{$value['name']}</a></li>
        ";
    }

    echo "</ul>";
?>

<?php

function generate_card($img_file_name, $title, $content, $link = "#"){

echo    "<div class='card' style='width: 18rem;'>
            <img src='assets/img/$img_file_name' class='card-img-top' alt='$title'>
            <div class='card-body'>
                <h5 class='card-title'>$title</h5>
                <p class='card-text'>$content</p>
                <a href='$link' class='btn btn-primary'>Acheter</a>
            </div>
        </div>";
}
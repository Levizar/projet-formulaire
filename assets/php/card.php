<?php

function generate_card($img_file_name, $title, $content, $link = "#"){

echo    "<div class='card col-12 col-sm-5 col-md-3 m-2 p-0''>
            <img src='assets/img/$img_file_name' class='card-img-top' alt='$title'>
            <div class='card-body'>
                <h5 class='card-title font-weight-bold'>$title</h5>
                <p class='card-text'>$content</p>
                <a href='$link' class='btn btn-primary d-block bg-color'>Acheter</a>
            </div>
        </div>";
}
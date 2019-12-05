<?php

function generate_card($img_file_name, $title, $content, $link = "#"){

echo    "<div class='card col-12 col-sm-5 col-lg-3 m-3 p-0 shadow'>
            <img src='assets/img/$img_file_name' class='card-img-top' alt='$title'>
            <div class='card-body d-flex flex-column justify-content-between'>
                <div>
                    <h5 class='card-title font-weight-bold'>$title</h5>
                    <p class='card-text'>$content</p>
                </div>
                <a href='$link' class='btn btn-primary d-block bg-color mt-2' target='_blank'>Acheter</a>
            </div>
        </div>";
}
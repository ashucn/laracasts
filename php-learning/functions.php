<?php

function dd($data = null) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';

}
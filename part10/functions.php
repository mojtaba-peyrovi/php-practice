<?php
function dd($value)
{
    echo "<pre>";
    die(var_dump($value));
    echo "</pre>";
}
function check_age($age)
{
    if ($age <= 21) {
        echo "You are not allowed to enter!";
    }else {
        echo "come on in!";
    }
}

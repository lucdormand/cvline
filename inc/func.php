<?php

function debug($tableau)
{
    echo '<pre style="height:400px;overflow-y: scroll;font-size: .7rem;padding: .6rem;font-family: Consolas, Monospace;background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}

function cleanXss($key): string
{
    return trim(strip_tags($_POST[$key]));
}

function textValidation(array $errors, string $value, string $key, int $min = 3, int $max = 50): array
{
    if (!empty($value)) {
        if (mb_strlen($value) < $min) {
            $errors[$key] = 'Min ' . $min . ' caractères';
        } elseif (mb_strlen($value) > $max) {
            $errors[$key] = 'Max ' . $max . ' caractères';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner ce champ.';
    }
    return $errors;
}

function emailValidation($errors, $email, $key)
{
    if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[$key] = 'Veuillez renseigner un email valide';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner un email';
    }
    return $errors;
}

function intValidation($errors, $int, $key)
{
    if (!empty($int)) {
        if (is_numeric($int) != true) {
            $errors[$key] = 'Veuillez renseigner un nombre';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner ce champ';
    }
    return $errors;
}

function phoneValidation($errors, $phoneNumber, $key)
{
    if (!empty($phoneNumber)) {
        $regex = '#^0[2-6-7]{1}\d{8}$#';
        if (!preg_match($regex, $phoneNumber)) {
            $errors[$key] = 'Renseignez un numéro valide';
        }
    } else {
        $errors[$key] = 'Veuillez renseigner un numéro';
    }
    return $errors;
}

function dateValidation($errors, $value, $key)
{
    if (strtotime($value) >= strtotime(date('Y-m-d'))) {
        $errors[$key] = 'Veuillez rentrez une date valide';
    }
    if (empty($value)) {
        $errors[$key] = 'Veuillez selectionez une date';
    }
    return $errors;
}


function showJson($data)
{
    header("Content-type: application/json");
    $json = json_encode($data, JSON_PRETTY_PRINT);
    if ($json) {
        die($json);
    } else {
        die('error in Json encoding');
    }
}

function asset()
{
    return get_template_directory_uri() . '/asset/';
}

function path($slug)
{
    return esc_url(home_url($slug));
}

function recupInputValue($key)
{
    if (!empty($_POST[$key])) {
        echo $_POST[$key];
    }
}

function viewError($errors, $key)
{
    if (!empty($errors[$key])) {
        echo $errors[$key];
    }
}

function getImageAttachment($id_attachment, $size = 'thumbnail', $alt = '')
{
    $image = wp_get_attachment_image_src($id_attachment, $size);
    if (!empty($image)) {
        return '<img src="' . $image[0] . '" alt="' . $alt . '"/>';
    }
    return '';
}


function isNotLogged()
{
    if (!is_user_logged_in()) {
        wp_redirect(path('/?error=login'));
    }
}
function getImageFeature($id, $size, $alt)
{
    $image_url = get_the_post_thumbnail_url($id, $size);
    if (!empty($image_url)) {
        return '<img src="' . $image_url . '" alt="' . $alt . '" />';
    }
    return '<img src="' . asset('img/team1.jpeg') . '" width="300px" height="200px" />';
}


function deniedAccessRole($roleDenied)
{
    $user = wp_get_current_user();
    if ($user->roles[0] == $roleDenied) {
        wp_redirect(path('/?access=denied'));
    }
}

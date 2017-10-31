<?php

function setGuestCookie()
{
    if (!array_key_exists(GUEST_ID, $_COOKIE)) {
        setcookie(GUEST_ID, generateGuestId(), time() + 60 * 60 * 24 * 30);
    }
}

function generateGuestId()
{
    $existedGuests = json_decode(file_get_contents(__DIR__ . '/storage/guests.json')) ?: [];
    do {
        $guestId = uniqid();
    } while (in_array($guestId, $existedGuests));

    $existedGuests[] = $guestId;
    file_put_contents(__DIR__ . '/storage/guests.json', json_encode($existedGuests));

    return $guestId;
}

function like()
{
    $likes = json_decode(file_get_contents(__DIR__ . '/storage/likes.json')) ?: [];

    $guestId = $_COOKIE[GUEST_ID];
    if (in_array($guestId, $likes)) {
        return false;
    }

    $likes[] = $guestId;

    file_put_contents(__DIR__ . '/storage/likes.json', json_encode($likes));
    return true;
}

function dislike()
{
    $dislikes = json_decode(file_get_contents(__DIR__ . '/storage/dislikes.json')) ?: [];

    $guestId = $_COOKIE[GUEST_ID];
    if (in_array($guestId, $dislikes)) {
        return false;
    }

    $dislikes[] = $guestId;

    file_put_contents(__DIR__ . '/storage/dislikes.json', json_encode($dislikes));
    return true;
}

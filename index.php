<?php

function covertToDomesticFormat(string $phoneNumber): ?string {

    $phoneNumber = preg_replace('/^\d{3}/', '(${0})', $phoneNumber);
    $phoneNumber = preg_replace('/\d{4}$/', '-${0}', $phoneNumber);
    $phoneNumber = preg_replace('/\d{3}-/', ' ${0}', $phoneNumber);

    return $phoneNumber;
}

$phoneNumber = '1234567890000';

echo covertToDomesticFormat($phoneNumber);



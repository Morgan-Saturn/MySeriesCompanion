<?php

    declare(strict_types=1);

    function e(?string $valeur): string// ?string accepte la valeur null
{
    return htmlspecialchars($valeur ?? '', ENT_QUOTES, 'UTF-8');
}

<?php

declare(strict_types=1);

namespace Encryption\Cipher\CAMELLIA;


use Encryption\Cipher\ACipherWithInitializationVector;
use Encryption\Traits\decrypt;
use Encryption\Traits\encryptWithPadding;

class Camellia256cbc extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 16;
    public const CIPHER = 'CAMELLIA-256-CBC';

    use encryptWithPadding, decrypt;
}

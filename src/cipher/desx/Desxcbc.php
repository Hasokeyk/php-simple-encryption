<?php

declare(strict_types=1);

namespace Encryption\Cipher\DESX;


use Encryption\ACipherWithInitializationVector;
use Encryption\decrypt;
use Encryption\encryptWithPadding;

class Desxcbc extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 8;
    public const CIPHER = 'DESX-CBC';

    use encryptWithPadding, decrypt;
}

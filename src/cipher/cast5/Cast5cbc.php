<?php

declare(strict_types=1);

namespace Encryption\Cipher\CAST5;


use Encryption\ACipherWithInitializationVector;
use Encryption\decrypt;
use Encryption\encryptWithPadding;

class Cast5cbc extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 8;
    public const CIPHER = 'CAST5-CBC';

    use encryptWithPadding, decrypt;
}

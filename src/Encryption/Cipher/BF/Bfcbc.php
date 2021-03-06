<?php

declare(strict_types=1);

namespace Encryption\Cipher\BF;


use Encryption\Cipher\ACipherWithInitializationVector;
use Encryption\Traits\decrypt;
use Encryption\Traits\encryptWithPadding;

class Bfcbc extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 8;
    public const CIPHER = 'BF-CBC';

    use encryptWithPadding, decrypt;
}

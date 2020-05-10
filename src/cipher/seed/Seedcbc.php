<?php

declare(strict_types=1);

namespace Encryption\Cipher\SEED;


use Encryption\ACipherWithInitializationVector;
use Encryption\decrypt;
use Encryption\encryptWithPadding;

class Seedcbc extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 16;
    public const CIPHER = 'SEED-CBC';

    use encryptWithPadding, decrypt;
}

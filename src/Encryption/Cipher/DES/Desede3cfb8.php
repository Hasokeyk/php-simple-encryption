<?php

declare(strict_types=1);

namespace Encryption\Cipher\DES;


use Encryption\Cipher\ACipherWithInitializationVector;
use Encryption\Traits\decrypt;
use Encryption\Traits\encryptWithPadding;

class Desede3cfb8 extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 8;
    public const CIPHER = 'DES-EDE3-CFB8';

    use encryptWithPadding, decrypt;
}

<?php

declare(strict_types=1);

namespace Encryption\Cipher\AES;


use Encryption\Cipher\ACipherWithInitializationVector;
use Encryption\Traits\decrypt;
use Encryption\Traits\encryptWithPadding;

class Aes192cfb8 extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 16;
    public const CIPHER = 'AES-192-CFB8';

    use encryptWithPadding, decrypt;
}

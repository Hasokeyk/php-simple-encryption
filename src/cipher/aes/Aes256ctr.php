<?php

declare(strict_types=1);

namespace Encryption\Cipher\AES;


use Encryption\ACipherWithInitializationVector;
use Encryption\decrypt;
use Encryption\encryptWithPadding;

class Aes256ctr extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 16;
    public const CIPHER = 'AES-256-CTR';

    use encryptWithPadding, decrypt;
}

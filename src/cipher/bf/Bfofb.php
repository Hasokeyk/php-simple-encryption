<?php

declare(strict_types=1);

namespace Encryption\Cipher\BF;


use Encryption\ACipherWithInitializationVector;
use Encryption\decrypt;
use Encryption\encryptWithPadding;

class Bfofb extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 8;
    public const CIPHER = 'BF-OFB';

    use encryptWithPadding, decrypt;
}

<?php

declare(strict_types=1);

namespace Encryption\Cipher\ARIA;


use Encryption\ACipherNoInitializationVector;
use Encryption\decryptNoIV;
use Encryption\encryptWithPaddingNoIV;

class Aria256ecb extends ACipherNoInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 0;
    public const CIPHER = 'ARIA-256-ECB';

    use encryptWithPaddingNoIV, decryptNoIV;
}

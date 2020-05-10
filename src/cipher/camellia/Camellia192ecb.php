<?php

declare(strict_types=1);

namespace Encryption\Cipher\CAMELLIA;


use Encryption\ACipherNoInitializationVector;
use Encryption\decryptNoIV;
use Encryption\encryptWithPaddingNoIV;

class Camellia192ecb extends ACipherNoInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 0;
    public const CIPHER = 'CAMELLIA-192-ECB';

    use encryptWithPaddingNoIV, decryptNoIV;
}

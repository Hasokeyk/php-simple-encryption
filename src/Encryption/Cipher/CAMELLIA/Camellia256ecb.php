<?php

declare(strict_types=1);

namespace Encryption\Cipher\CAMELLIA;


use Encryption\Cipher\ACipherNoInitializationVector;
use Encryption\Traits\decryptNoIV;
use Encryption\Traits\encryptWithPaddingNoIV;

class Camellia256ecb extends ACipherNoInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 0;
    public const CIPHER = 'CAMELLIA-256-ECB';

    use encryptWithPaddingNoIV, decryptNoIV;
}

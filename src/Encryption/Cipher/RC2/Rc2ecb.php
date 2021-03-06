<?php

declare(strict_types=1);

namespace Encryption\Cipher\RC2;


use Encryption\Cipher\ACipherNoInitializationVector;
use Encryption\Traits\decryptNoIV;
use Encryption\Traits\encryptWithPaddingNoIV;

class Rc2ecb extends ACipherNoInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 0;
    public const CIPHER = 'RC2-ECB';

    use encryptWithPaddingNoIV, decryptNoIV;
}

<?php

declare(strict_types=1);

namespace Encryption\Cipher\ID;


use Encryption\ACipherAeadMode;
use Encryption\decryptAeadMode;
use Encryption\encryptWithPaddingAeadMode;

class Idaes192ccm extends ACipherAeadMode
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 12;
    public const CIPHER = 'ID-AES192-CCM';

    use encryptWithPaddingAeadMode, decryptAeadMode;
}

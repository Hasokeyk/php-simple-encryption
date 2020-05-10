<?php

declare(strict_types=1);

namespace JohnConde\Encryption\Cipher\ID;


use JohnConde\Encryption\ACipherAeadMode;
use JohnConde\Encryption\decryptAeadMode;
use JohnConde\Encryption\encryptWithPaddingAeadMode;

class Idaes128gcm extends ACipherAeadMode
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 12;
    public const CIPHER = 'ID-AES128-GCM';

    use encryptWithPaddingAeadMode, decryptAeadMode;
}
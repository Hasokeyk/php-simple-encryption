<?php

declare(strict_types=1);

namespace Encryption\Cipher\CAMELLIA;


use Encryption\ACipherWithInitializationVector;
use Encryption\decrypt;
use Encryption\encryptWithPadding;

class Camellia128ctr extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 16;
    public const CIPHER = 'CAMELLIA-128-CTR';

    use encryptWithPadding, decrypt;
}

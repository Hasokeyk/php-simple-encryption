<?php

declare(strict_types=1);

namespace Encryption\Cipher\ARIA;

use Encryption\Cipher\ACipherWithInitializationVector;
use Encryption\Traits\decrypt;
use Encryption\Traits\encryptWithPadding;

class Aria128ctr extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 16;
    public const CIPHER = 'ARIA-128-CTR';

    use encryptWithPadding, decrypt;
}

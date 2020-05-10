<?php

declare(strict_types=1);

namespace Encryption\Cipher\RC2;


use Encryption\ACipherWithInitializationVector;
use Encryption\decrypt;
use Encryption\encryptWithPadding;

class Rc2ofb extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 8;
    public const CIPHER = 'RC2-OFB';

    use encryptWithPadding, decrypt;
}

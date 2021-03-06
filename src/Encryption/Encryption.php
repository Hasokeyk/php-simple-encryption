<?php

declare(strict_types=1);

namespace Encryption;


use Encryption\Cipher\ACipher;
use Encryption\Exceptions\CipherNotImplementedException;
use Encryption\Exceptions\InvalidCipherException;

class Encryption
{
    public const DEFAULT_CIPHER = 'AES-256-CBC';

    public static function getEncryptionObject(?string $cipher = null): ACipher
    {
        $cipher = strtolower($cipher ?: static::DEFAULT_CIPHER);
        $availableCiphers = static::getCipherMethods();
        if (!in_array($cipher, $availableCiphers, true)) {
            $message = sprintf('Invalid cipher selected [%s]', $cipher);
            throw new InvalidCipherException($message);
        }
        return static::createEncryptionObject($cipher);
    }

    protected static function createEncryptionObject(string $cipher): ACipher
    {
        $className = static::createClassName($cipher);
        if (!class_exists($className)) {
            $message = sprintf('Cipher [%s] has not been implemented yet', $cipher);
            throw new CipherNotImplementedException($message);
        }
        return new $className();
    }

    protected static function createClassName(string $cipher): string {
        $crypto = strtoupper(explode('-', $cipher)[0]);
        return sprintf('%s\%s\%s',
            'Encryption\Cipher',
            $crypto,
            str_replace('-', '', ucwords($cipher))
        );
    }

    public static function getCipherMethods(): array
    {
        return array_unique(array_map('strtolower', openssl_get_cipher_methods()));
    }

    public static function listAvailableCiphers(): array
    {
        $availableCiphers = [];
        foreach (static::getCipherMethods() as $cipher) {
            $className = static::createClassName($cipher);
            if (class_exists($className)) {
                $availableCiphers[] = $cipher;
            }
        }
        return $availableCiphers;
    }
}

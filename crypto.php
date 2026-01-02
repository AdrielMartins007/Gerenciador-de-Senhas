<?php
define('SECRET_KEY', 'chave_super_secreta_123');
define('SECRET_IV', 'iv_super_secreto_123');

function criptografar($texto) {
    return openssl_encrypt(
        $texto,
        'AES-256-CBC',
        SECRET_KEY,
        0,
        substr(hash('sha256', SECRET_IV), 0, 16)
    );
}

function descriptografar($texto) {
    return openssl_decrypt(
        $texto,
        'AES-256-CBC',
        SECRET_KEY,
        0,
        substr(hash('sha256', SECRET_IV), 0, 16)
    );
}

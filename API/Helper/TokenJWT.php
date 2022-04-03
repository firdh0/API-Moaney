<?php

require_once('../vendor/autoload.php');

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class TokenJWT
{
    const key = '3c_Gj?WV*8nBfN5*udTNdh-3C8yGtZvB82FD9E7?-!Y9^d**r_+?$qZfZPuHGc!bSJ3!jnD&9?BSqh%b8=t7KQ%5x$5ZBCys-y*hf*6w6Zj+yq2nb9R%mkX4RJrvmyR&gtVL#UaVg&2Tjz3NPYuzu?C_zPa3gnMRyRta_Jn5?8ump9XXuz%a9g4X9rn*_#r2XCZv$VNbK6$mNH!aZjKCeNRRhS%!U3@m-7G%HZZ4g#mdM9MBX3DnhKRKwUbtk@T6';

    static function generate($payload)
    {
        $jwt = JWT::encode($payload, self::key, 'HS256');
        return $jwt;
    }

    static function getData($token)
    {
        $decoded = JWT::decode($token, new Key(self::key, 'HS256'));
        return $decoded;
    }
}

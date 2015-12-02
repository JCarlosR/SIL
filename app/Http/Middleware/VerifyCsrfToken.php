<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'protocolo/registrar',
        'asignar/examenes/paciente*',
        'orden/verificar*',
        'orden/empresa*',
        'modificar/rit*',
        'modificar/titulo*',
        'modificar/capitulo*',
        'modificar/articulo*',
        'modificar/item*'
    ];
}

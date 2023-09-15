<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/scolar/api/user/create',
        '/scolar/api/user/email-verify-at/update',
        '/scolar/api/user/login',
        '/scolar/api/user/login/update',
        '/scolar/api/user/profile/update',
        '/scolar/api/xp/user/update',
        '/scolar/api/send/email/test',
        '/scolar/api/book/user/update',
        '/scolar/api/code-for-books/change-used',
    ];
}

<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'     => CSRF::class,
        'toolbar'  => DebugToolbar::class,
        'honeypot' => Honeypot::class,
        'filteruser' => \App\Filters\FilterUser::class,
        'filteradmin' => \App\Filters\FilterAdmin::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            // 'honeypot',
            // 'csrf',
            'filteradmin' => ['except' => [
                'auth', 'auth/*',
                'beranda', 'beranda/*',
                'peta_sebaran', 'peta_sebaran/*',
                'hubungi', 'hubungi/*',
                'berita', 'berita/*',
                'profil', 'profil/*',
                'covid',
                'vaksin',
                'rumah_sakit',
                'infografis',
                '/',
            ]],
            'filteruser' => ['except' => [
                'auth', 'auth/*',
                'beranda', 'beranda/*',
                'peta_sebaran', 'peta_sebaran/*',
                'hubungi', 'hubungi/*',
                'berita', 'berita/*',
                'profil', 'profil/*',
                'covid',
                'vaksin',
                'rumah_sakit',
                'infografis',
                '/',
            ]],
        ],
        'after' => [
            'filteradmin' => ['except' => [
                'beranda', 'beranda/*',
                '/',
                'covid', 'covid/*',
                'rumah_sakit', 'rumah_sakit/*',
                'peta_sebaran', 'peta_sebaran/*',
                'hubungi', 'hubungi/*',
                'infografis', 'infografis/*',
                'berita', 'berita/*',
                'vaksin', 'vaksin/*',
                'profil', 'profil/*',
            ]],
            'filteruser' => ['except' => [
                'beranda', 'beranda/*',
                '/',
                'covid', 'covid/deteksi', 'covid/deteksi_mandiri', 'covid/print_gejala', 'covid/print_tidak_gejala',
                'rumah_sakit',
                'peta_sebaran', 'peta_sebaran/*',
                'hubungi', 'hubungi/*',
                'infografis',
                'berita', 'berita/*',
                'vaksin', 'vaksin/pendaftaran',
                'profil', 'profil/*',
            ]],
            'toolbar',
            // 'honeypot',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}

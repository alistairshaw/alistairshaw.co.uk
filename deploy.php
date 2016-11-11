<?php
require_once 'vendor/deployer/deployer/recipe/common.php';
require_once 'vendor/deployphp/recipes/recipes/rsync.php';

// Configure servers
server('production', 'production.alistairshaw.co.uk')
    ->user('jenkins')
    ->identityFile('/var/lib/jenkins/.ssh/id_rsa.pub', '/var/lib/jenkins/.ssh/id_rsa')
    ->env('deploy_path', '/var/www/alistairshaw.co.uk');

env('rsync_src', __DIR__);
env('rsync_dest', '{{release_path}}');

set('rsync', [
    'exclude'       => [
        '.git',
        '.gitignore',
        'composer.json',
        'composer.lock',
        'gruntfile',
        'package.json',
        'deploy.php',
        'resources/img',
        'resources/js',
        'resources/sass'
    ],
    'exclude-file'  => false,
    'include'       => [],
    'include-file'  => false,
    'filter'        => [],
    'filter-file'   => false,
    'filter-perdir' => false,
    'flags'         => 'rz', // Recursive, with compress
    'options'       => ['delete'],
    'timeout'       => 300,
]);

task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'rsync',
    'deploy:symlink',
    'cleanup',
])->desc('Deploying Website');

// comment
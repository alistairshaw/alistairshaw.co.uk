<?php
require 'recipe/common.php';
require 'recipe/rsync.php';

// Configure servers
server('production', 'production.alistairshaw.co.uk')
    ->user('jenkins')
    ->identityFile('/var/lib/jenkins/.ssh/id_rsa.pub', '/var/lib/jenkins/.ssh/id_rsa')
    ->env('deploy_path', '/var/www/alistairshaw.co.uk');

env('rsync_src', '/{{build_folder}}/');
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
    ],
    'exclude-file'  => false,
    'include'       => [],
    'include-file'  => false,
    'filter'        => [],
    'filter-file'   => false,
    'filter-perdir' => false,
    'flags'         => 'rz', // Recursive, with compress
    'options'       => ['delete'],
    'timeout'       => 60,
]);

task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'rsync',
    'deploy:symlink',
    'cleanup',
])->desc('Deploying Website');
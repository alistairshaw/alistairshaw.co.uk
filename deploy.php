<?php

require 'recipe/composer.php';

set('shared_files', []);
set('shared_dirs', []);
set('writable_dirs', []);

// Configure servers
server('production', 'production.alistairshaw.co.uk')
    ->user('jenkins')
    ->identityFile('/var/lib/jenkins/.ssh/id_rsa')
    ->env('deploy_path', '/var/www/alistairshaw.co.uk');

after('deploy:update_code', 'deploy:shared');
<?php

namespace Deployer;

require 'recipe/laravel.php';

set('application', 'web');
set('repository', 'git@github.com:sukycms/web.git');
set('git_tty', true);

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

host('sukycms.com')
    ->set('deploy_path', '/var/www/sukycms/{{application}}');

task('npm', function () {
    if (! input()->getOption('skip-build')) {
        runLocally('yarn run prod');
    }
    upload('public/build', '{{release_path}}/public');
    upload('public/mix-manifest.json', '{{release_path}}/public');
});

after('deploy:failed', 'deploy:unlock');
after('deploy:vendors', 'npm');


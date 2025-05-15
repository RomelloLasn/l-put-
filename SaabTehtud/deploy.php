<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'saabtehtud');

// Project repository
set('repository', 'https://github.com/RomelloLasn/l-put-.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);

// Hosts
host('tak22lasn.itmajakas.ee')
    ->set('remote_user', 'virt118441') // SSH user
    ->set('deploy_path', '/data01/virt118441/domeenid/www.tak22lasn.itmajakas.ee/saabtehtud'); // Deployment path

// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.
before('deploy:symlink', 'artisan:migrate');
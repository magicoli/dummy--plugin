<?php return array(
    'root' => array(
        'name' => 'magicoli/dummy-plugin',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => '9a84d373d338c6aabb450fc17f893e874ea497d8',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'magicoli/dummy-plugin' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '9a84d373d338c6aabb450fc17f893e874ea497d8',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'magicoli/wp-package-updater-lib' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '5a0f7bda00713ba7eb8ee75570699459d6ec8bfd',
            'type' => 'library',
            'install_path' => __DIR__ . '/../magicoli/wp-package-updater-lib',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);

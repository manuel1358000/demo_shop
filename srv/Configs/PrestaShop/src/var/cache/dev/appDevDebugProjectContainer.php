<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFtjsahp\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFtjsahp/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerFtjsahp.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerFtjsahp\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerFtjsahp\appDevDebugProjectContainer([
    'container.build_hash' => 'Ftjsahp',
    'container.build_id' => '50c49030',
    'container.build_time' => 1623433620,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFtjsahp');

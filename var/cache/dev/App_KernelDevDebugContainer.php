<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOyKe8OD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOyKe8OD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOyKe8OD.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOyKe8OD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOyKe8OD\App_KernelDevDebugContainer([
    'container.build_hash' => 'OyKe8OD',
    'container.build_id' => '6d13b708',
    'container.build_time' => 1683486092,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOyKe8OD');

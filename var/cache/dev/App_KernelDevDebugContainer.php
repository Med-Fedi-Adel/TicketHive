<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXqx3342\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXqx3342/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXqx3342.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXqx3342\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXqx3342\App_KernelDevDebugContainer([
    'container.build_hash' => 'Xqx3342',
    'container.build_id' => 'f0927c68',
    'container.build_time' => 1683712392,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXqx3342');

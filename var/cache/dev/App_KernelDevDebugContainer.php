<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7fcIekP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7fcIekP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7fcIekP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7fcIekP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7fcIekP\App_KernelDevDebugContainer([
    'container.build_hash' => '7fcIekP',
    'container.build_id' => '26fb6120',
    'container.build_time' => 1683117190,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7fcIekP');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFeozTBQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFeozTBQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFeozTBQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFeozTBQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFeozTBQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'FeozTBQ',
    'container.build_id' => '16cbd9f8',
    'container.build_time' => 1715343057,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFeozTBQ');
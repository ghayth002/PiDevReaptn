<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN45mwIN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN45mwIN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerN45mwIN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerN45mwIN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerN45mwIN\App_KernelDevDebugContainer([
    'container.build_hash' => 'N45mwIN',
    'container.build_id' => '87f52667',
    'container.build_time' => 1740269344,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN45mwIN');

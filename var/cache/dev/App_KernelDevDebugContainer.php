<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPT1N2cb\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPT1N2cb/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPT1N2cb.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPT1N2cb\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPT1N2cb\App_KernelDevDebugContainer([
    'container.build_hash' => 'PT1N2cb',
    'container.build_id' => 'c9af0071',
    'container.build_time' => 1700742955,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPT1N2cb');
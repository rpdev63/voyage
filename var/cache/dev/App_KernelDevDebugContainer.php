<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerM6PdHij\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerM6PdHij/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerM6PdHij.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerM6PdHij\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerM6PdHij\App_KernelDevDebugContainer([
    'container.build_hash' => 'M6PdHij',
    'container.build_id' => '0abeda68',
    'container.build_time' => 1643633254,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerM6PdHij');

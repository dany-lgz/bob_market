<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSrKUOBz\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSrKUOBz/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSrKUOBz.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSrKUOBz\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerSrKUOBz\srcApp_KernelDevDebugContainer(array(
    'container.build_hash' => 'SrKUOBz',
    'container.build_id' => 'a849cdfc',
    'container.build_time' => 1546807863,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerSrKUOBz');

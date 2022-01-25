<?php

namespace ContainerBcE5PvK;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3671d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera40bd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4e2b9 = [
        
    ];

    public function getConnection()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'getConnection', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'getMetadataFactory', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'getExpressionBuilder', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'beginTransaction', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'getCache', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->getCache();
    }

    public function transactional($func)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'transactional', array('func' => $func), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'wrapInTransaction', array('func' => $func), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'commit', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->commit();
    }

    public function rollback()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'rollback', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'getClassMetadata', array('className' => $className), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'createQuery', array('dql' => $dql), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'createNamedQuery', array('name' => $name), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'createQueryBuilder', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'flush', array('entity' => $entity), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'clear', array('entityName' => $entityName), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->clear($entityName);
    }

    public function close()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'close', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->close();
    }

    public function persist($entity)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'persist', array('entity' => $entity), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'remove', array('entity' => $entity), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'refresh', array('entity' => $entity), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'detach', array('entity' => $entity), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'merge', array('entity' => $entity), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'getRepository', array('entityName' => $entityName), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'contains', array('entity' => $entity), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'getEventManager', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'getConfiguration', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'isOpen', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'getUnitOfWork', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'getProxyFactory', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'initializeObject', array('obj' => $obj), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'getFilters', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'isFiltersStateClean', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'hasFilters', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return $this->valueHolder3671d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera40bd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3671d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3671d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3671d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, '__get', ['name' => $name], $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        if (isset(self::$publicProperties4e2b9[$name])) {
            return $this->valueHolder3671d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3671d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3671d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3671d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3671d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, '__isset', array('name' => $name), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3671d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3671d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, '__unset', array('name' => $name), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3671d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3671d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, '__clone', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        $this->valueHolder3671d = clone $this->valueHolder3671d;
    }

    public function __sleep()
    {
        $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, '__sleep', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;

        return array('valueHolder3671d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera40bd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera40bd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera40bd && ($this->initializera40bd->__invoke($valueHolder3671d, $this, 'initializeProxy', array(), $this->initializera40bd) || 1) && $this->valueHolder3671d = $valueHolder3671d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3671d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3671d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

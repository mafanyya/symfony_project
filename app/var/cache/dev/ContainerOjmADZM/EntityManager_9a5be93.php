<?php

namespace ContainerOjmADZM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder56bec = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdc8ad = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfdaec = [
        
    ];

    public function getConnection()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'getConnection', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'getMetadataFactory', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'getExpressionBuilder', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'beginTransaction', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'getCache', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->getCache();
    }

    public function transactional($func)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'transactional', array('func' => $func), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'commit', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->commit();
    }

    public function rollback()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'rollback', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'getClassMetadata', array('className' => $className), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'createQuery', array('dql' => $dql), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'createNamedQuery', array('name' => $name), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'createQueryBuilder', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'flush', array('entity' => $entity), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'clear', array('entityName' => $entityName), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->clear($entityName);
    }

    public function close()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'close', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->close();
    }

    public function persist($entity)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'persist', array('entity' => $entity), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'remove', array('entity' => $entity), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'refresh', array('entity' => $entity), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'detach', array('entity' => $entity), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'merge', array('entity' => $entity), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'contains', array('entity' => $entity), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'getEventManager', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'getConfiguration', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'isOpen', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'getUnitOfWork', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'getProxyFactory', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'initializeObject', array('obj' => $obj), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'getFilters', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'isFiltersStateClean', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'hasFilters', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return $this->valueHolder56bec->hasFilters();
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

        $instance->initializerdc8ad = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder56bec) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder56bec = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder56bec->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, '__get', ['name' => $name], $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        if (isset(self::$publicPropertiesfdaec[$name])) {
            return $this->valueHolder56bec->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56bec;

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

        $targetObject = $this->valueHolder56bec;
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
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56bec;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder56bec;
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
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, '__isset', array('name' => $name), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56bec;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder56bec;
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
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, '__unset', array('name' => $name), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56bec;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder56bec;
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
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, '__clone', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        $this->valueHolder56bec = clone $this->valueHolder56bec;
    }

    public function __sleep()
    {
        $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, '__sleep', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;

        return array('valueHolder56bec');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdc8ad = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdc8ad;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerdc8ad && ($this->initializerdc8ad->__invoke($valueHolder56bec, $this, 'initializeProxy', array(), $this->initializerdc8ad) || 1) && $this->valueHolder56bec = $valueHolder56bec;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder56bec;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56bec;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

<?php

namespace ContainerAfoaNHQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderde7e0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere59b2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0238d = [
        
    ];

    public function getConnection()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'getConnection', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'getMetadataFactory', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'getExpressionBuilder', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'beginTransaction', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'getCache', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->getCache();
    }

    public function transactional($func)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'transactional', array('func' => $func), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'wrapInTransaction', array('func' => $func), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'commit', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->commit();
    }

    public function rollback()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'rollback', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'getClassMetadata', array('className' => $className), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'createQuery', array('dql' => $dql), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'createNamedQuery', array('name' => $name), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'createQueryBuilder', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'flush', array('entity' => $entity), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'clear', array('entityName' => $entityName), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->clear($entityName);
    }

    public function close()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'close', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->close();
    }

    public function persist($entity)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'persist', array('entity' => $entity), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'remove', array('entity' => $entity), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'refresh', array('entity' => $entity), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'detach', array('entity' => $entity), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'merge', array('entity' => $entity), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'getRepository', array('entityName' => $entityName), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'contains', array('entity' => $entity), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'getEventManager', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'getConfiguration', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'isOpen', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'getUnitOfWork', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'getProxyFactory', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'initializeObject', array('obj' => $obj), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'getFilters', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'isFiltersStateClean', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'hasFilters', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return $this->valueHolderde7e0->hasFilters();
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

        $instance->initializere59b2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderde7e0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderde7e0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderde7e0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, '__get', ['name' => $name], $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        if (isset(self::$publicProperties0238d[$name])) {
            return $this->valueHolderde7e0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde7e0;

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

        $targetObject = $this->valueHolderde7e0;
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
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde7e0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderde7e0;
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
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, '__isset', array('name' => $name), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde7e0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderde7e0;
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
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, '__unset', array('name' => $name), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde7e0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderde7e0;
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
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, '__clone', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        $this->valueHolderde7e0 = clone $this->valueHolderde7e0;
    }

    public function __sleep()
    {
        $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, '__sleep', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;

        return array('valueHolderde7e0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere59b2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere59b2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere59b2 && ($this->initializere59b2->__invoke($valueHolderde7e0, $this, 'initializeProxy', array(), $this->initializere59b2) || 1) && $this->valueHolderde7e0 = $valueHolderde7e0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderde7e0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderde7e0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

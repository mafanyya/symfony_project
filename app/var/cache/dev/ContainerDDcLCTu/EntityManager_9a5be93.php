<?php

namespace ContainerDDcLCTu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder59909 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer85c1c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd30f9 = [
        
    ];

    public function getConnection()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'getConnection', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'getMetadataFactory', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'getExpressionBuilder', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'beginTransaction', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'getCache', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->getCache();
    }

    public function transactional($func)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'transactional', array('func' => $func), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'wrapInTransaction', array('func' => $func), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'commit', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->commit();
    }

    public function rollback()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'rollback', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'getClassMetadata', array('className' => $className), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'createQuery', array('dql' => $dql), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'createNamedQuery', array('name' => $name), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'createQueryBuilder', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'flush', array('entity' => $entity), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'clear', array('entityName' => $entityName), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->clear($entityName);
    }

    public function close()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'close', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->close();
    }

    public function persist($entity)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'persist', array('entity' => $entity), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'remove', array('entity' => $entity), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'refresh', array('entity' => $entity), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'detach', array('entity' => $entity), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'merge', array('entity' => $entity), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'getRepository', array('entityName' => $entityName), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'contains', array('entity' => $entity), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'getEventManager', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'getConfiguration', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'isOpen', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'getUnitOfWork', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'getProxyFactory', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'initializeObject', array('obj' => $obj), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'getFilters', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'isFiltersStateClean', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'hasFilters', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return $this->valueHolder59909->hasFilters();
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

        $instance->initializer85c1c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder59909) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder59909 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder59909->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, '__get', ['name' => $name], $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        if (isset(self::$publicPropertiesd30f9[$name])) {
            return $this->valueHolder59909->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59909;

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

        $targetObject = $this->valueHolder59909;
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
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59909;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder59909;
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
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, '__isset', array('name' => $name), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59909;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder59909;
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
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, '__unset', array('name' => $name), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder59909;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder59909;
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
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, '__clone', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        $this->valueHolder59909 = clone $this->valueHolder59909;
    }

    public function __sleep()
    {
        $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, '__sleep', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;

        return array('valueHolder59909');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer85c1c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer85c1c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer85c1c && ($this->initializer85c1c->__invoke($valueHolder59909, $this, 'initializeProxy', array(), $this->initializer85c1c) || 1) && $this->valueHolder59909 = $valueHolder59909;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder59909;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder59909;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

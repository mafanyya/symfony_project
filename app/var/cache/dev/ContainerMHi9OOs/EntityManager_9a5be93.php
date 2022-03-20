<?php

namespace ContainerMHi9OOs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder970fe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2ee3e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb3447 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'getConnection', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'getMetadataFactory', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'getExpressionBuilder', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'beginTransaction', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'getCache', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'transactional', array('func' => $func), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'commit', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->commit();
    }

    public function rollback()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'rollback', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'getClassMetadata', array('className' => $className), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'createQuery', array('dql' => $dql), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'createNamedQuery', array('name' => $name), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'createQueryBuilder', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'flush', array('entity' => $entity), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'clear', array('entityName' => $entityName), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->clear($entityName);
    }

    public function close()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'close', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->close();
    }

    public function persist($entity)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'persist', array('entity' => $entity), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'remove', array('entity' => $entity), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'refresh', array('entity' => $entity), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'detach', array('entity' => $entity), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'merge', array('entity' => $entity), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'contains', array('entity' => $entity), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'getEventManager', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'getConfiguration', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'isOpen', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'getUnitOfWork', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'getProxyFactory', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'initializeObject', array('obj' => $obj), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'getFilters', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'isFiltersStateClean', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'hasFilters', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return $this->valueHolder970fe->hasFilters();
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

        $instance->initializer2ee3e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder970fe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder970fe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder970fe->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, '__get', ['name' => $name], $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        if (isset(self::$publicPropertiesb3447[$name])) {
            return $this->valueHolder970fe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder970fe;

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

        $targetObject = $this->valueHolder970fe;
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
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder970fe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder970fe;
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
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, '__isset', array('name' => $name), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder970fe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder970fe;
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
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, '__unset', array('name' => $name), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder970fe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder970fe;
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
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, '__clone', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        $this->valueHolder970fe = clone $this->valueHolder970fe;
    }

    public function __sleep()
    {
        $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, '__sleep', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;

        return array('valueHolder970fe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2ee3e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2ee3e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2ee3e && ($this->initializer2ee3e->__invoke($valueHolder970fe, $this, 'initializeProxy', array(), $this->initializer2ee3e) || 1) && $this->valueHolder970fe = $valueHolder970fe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder970fe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder970fe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

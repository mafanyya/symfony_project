<?php

namespace ContainerU4THLAM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0663b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4b2ae = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6a772 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'getConnection', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'getMetadataFactory', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'getExpressionBuilder', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'beginTransaction', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'getCache', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'transactional', array('func' => $func), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'commit', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->commit();
    }

    public function rollback()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'rollback', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'getClassMetadata', array('className' => $className), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'createQuery', array('dql' => $dql), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'createNamedQuery', array('name' => $name), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'createQueryBuilder', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'flush', array('entity' => $entity), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'clear', array('entityName' => $entityName), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->clear($entityName);
    }

    public function close()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'close', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->close();
    }

    public function persist($entity)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'persist', array('entity' => $entity), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'remove', array('entity' => $entity), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'refresh', array('entity' => $entity), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'detach', array('entity' => $entity), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'merge', array('entity' => $entity), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'contains', array('entity' => $entity), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'getEventManager', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'getConfiguration', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'isOpen', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'getUnitOfWork', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'getProxyFactory', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'initializeObject', array('obj' => $obj), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'getFilters', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'isFiltersStateClean', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'hasFilters', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return $this->valueHolder0663b->hasFilters();
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

        $instance->initializer4b2ae = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0663b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0663b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0663b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, '__get', ['name' => $name], $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        if (isset(self::$publicProperties6a772[$name])) {
            return $this->valueHolder0663b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0663b;

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

        $targetObject = $this->valueHolder0663b;
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
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0663b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0663b;
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
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, '__isset', array('name' => $name), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0663b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0663b;
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
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, '__unset', array('name' => $name), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0663b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0663b;
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
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, '__clone', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        $this->valueHolder0663b = clone $this->valueHolder0663b;
    }

    public function __sleep()
    {
        $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, '__sleep', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;

        return array('valueHolder0663b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4b2ae = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4b2ae;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4b2ae && ($this->initializer4b2ae->__invoke($valueHolder0663b, $this, 'initializeProxy', array(), $this->initializer4b2ae) || 1) && $this->valueHolder0663b = $valueHolder0663b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0663b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0663b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

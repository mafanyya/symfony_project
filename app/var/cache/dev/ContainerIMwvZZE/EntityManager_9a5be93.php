<?php

namespace ContainerIMwvZZE;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5d770 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer213ca = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties07dd2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'getConnection', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'getMetadataFactory', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'getExpressionBuilder', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'beginTransaction', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'getCache', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->getCache();
    }

    public function transactional($func)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'transactional', array('func' => $func), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'wrapInTransaction', array('func' => $func), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'commit', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->commit();
    }

    public function rollback()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'rollback', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'getClassMetadata', array('className' => $className), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'createQuery', array('dql' => $dql), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'createNamedQuery', array('name' => $name), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'createQueryBuilder', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'flush', array('entity' => $entity), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'clear', array('entityName' => $entityName), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->clear($entityName);
    }

    public function close()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'close', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->close();
    }

    public function persist($entity)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'persist', array('entity' => $entity), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'remove', array('entity' => $entity), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'refresh', array('entity' => $entity), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'detach', array('entity' => $entity), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'merge', array('entity' => $entity), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'getRepository', array('entityName' => $entityName), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'contains', array('entity' => $entity), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'getEventManager', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'getConfiguration', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'isOpen', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'getUnitOfWork', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'getProxyFactory', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'initializeObject', array('obj' => $obj), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'getFilters', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'isFiltersStateClean', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'hasFilters', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return $this->valueHolder5d770->hasFilters();
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

        $instance->initializer213ca = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5d770) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5d770 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5d770->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, '__get', ['name' => $name], $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        if (isset(self::$publicProperties07dd2[$name])) {
            return $this->valueHolder5d770->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d770;

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

        $targetObject = $this->valueHolder5d770;
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
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d770;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5d770;
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
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, '__isset', array('name' => $name), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d770;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5d770;
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
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, '__unset', array('name' => $name), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d770;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5d770;
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
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, '__clone', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        $this->valueHolder5d770 = clone $this->valueHolder5d770;
    }

    public function __sleep()
    {
        $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, '__sleep', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;

        return array('valueHolder5d770');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer213ca = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer213ca;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer213ca && ($this->initializer213ca->__invoke($valueHolder5d770, $this, 'initializeProxy', array(), $this->initializer213ca) || 1) && $this->valueHolder5d770 = $valueHolder5d770;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5d770;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5d770;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}

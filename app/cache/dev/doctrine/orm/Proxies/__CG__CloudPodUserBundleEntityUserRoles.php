<?php

namespace Proxies\__CG__\CloudPod\UserBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class UserRoles extends \CloudPod\UserBundle\Entity\UserRoles implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setRoleID($roleID)
    {
        $this->__load();
        return parent::setRoleID($roleID);
    }

    public function getRoleID()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["roleID"];
        }
        $this->__load();
        return parent::getRoleID();
    }

    public function setRole($role)
    {
        $this->__load();
        return parent::setRole($role);
    }

    public function addUser(\CloudPod\UserBundle\Entity\User $users)
    {
        $this->__load();
        return parent::addUser($users);
    }

    public function removeUser(\CloudPod\UserBundle\Entity\User $users)
    {
        $this->__load();
        return parent::removeUser($users);
    }

    public function getUsers()
    {
        $this->__load();
        return parent::getUsers();
    }

    public function getRole()
    {
        $this->__load();
        return parent::getRole();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'roleID', 'role', 'users');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}
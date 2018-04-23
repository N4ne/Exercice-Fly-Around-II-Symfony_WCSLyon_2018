<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Site extends \AppBundle\Entity\Site implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'icao', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'latitude', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'longitude', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'city', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'departure', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'arrival'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'icao', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'latitude', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'longitude', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'city', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'departure', '' . "\0" . 'AppBundle\\Entity\\Site' . "\0" . 'arrival'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Site $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setIcao($icao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIcao', [$icao]);

        return parent::setIcao($icao);
    }

    /**
     * {@inheritDoc}
     */
    public function getIcao()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIcao', []);

        return parent::getIcao();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude($latitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude($longitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function addDeparture(\AppBundle\Entity\Flight $departure)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDeparture', [$departure]);

        return parent::addDeparture($departure);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDeparture(\AppBundle\Entity\Flight $departure)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDeparture', [$departure]);

        return parent::removeDeparture($departure);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartures()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartures', []);

        return parent::getDepartures();
    }

    /**
     * {@inheritDoc}
     */
    public function getDeparture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeparture', []);

        return parent::getDeparture();
    }

    /**
     * {@inheritDoc}
     */
    public function addArrival(\AppBundle\Entity\Flight $arrival)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addArrival', [$arrival]);

        return parent::addArrival($arrival);
    }

    /**
     * {@inheritDoc}
     */
    public function removeArrival(\AppBundle\Entity\Flight $arrival)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeArrival', [$arrival]);

        return parent::removeArrival($arrival);
    }

    /**
     * {@inheritDoc}
     */
    public function getArrival()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArrival', []);

        return parent::getArrival();
    }

}

<?php

namespace Proxies\__CG__\soleil\AgendaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class EvenementAgenda extends \soleil\AgendaBundle\Entity\EvenementAgenda implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', 'id', 'nomFr', 'nomEn', 'descriptionFr', 'descriptionEn', 'nbJour', 'dateDeb', 'dateFin', 'nbMax', 'nbInsc', 'prix', 'slug', 'site', 'formation', 'inscris');
        }

        return array('__isInitialized__', 'id', 'nomFr', 'nomEn', 'descriptionFr', 'descriptionEn', 'nbJour', 'dateDeb', 'dateFin', 'nbMax', 'nbInsc', 'prix', 'slug', 'site', 'formation', 'inscris');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (EvenementAgenda $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDeb($dateDeb)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDeb', array($dateDeb));

        return parent::setDateDeb($dateDeb);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDeb()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDeb', array());

        return parent::getDateDeb();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFin($dateFin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFin', array($dateFin));

        return parent::setDateFin($dateFin);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFin', array());

        return parent::getDateFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', array($slug));

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', array());

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSite(\soleil\SiteBundle\Entity\Site $site)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSite', array($site));

        return parent::setSite($site);
    }

    /**
     * {@inheritDoc}
     */
    public function getSite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSite', array());

        return parent::getSite();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbMax($nbMax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbMax', array($nbMax));

        return parent::setNbMax($nbMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbMax', array());

        return parent::getNbMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbInsc($nbInsc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbInsc', array($nbInsc));

        return parent::setNbInsc($nbInsc);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbInsc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbInsc', array());

        return parent::getNbInsc();
    }

    /**
     * {@inheritDoc}
     */
    public function setFormation(\soleil\FormationBundle\Entity\Formation $formation = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFormation', array($formation));

        return parent::setFormation($formation);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormation', array());

        return parent::getFormation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionFr($descriptionFr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionFr', array($descriptionFr));

        return parent::setDescriptionFr($descriptionFr);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionFr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionFr', array());

        return parent::getDescriptionFr();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionEn($descriptionEn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionEn', array($descriptionEn));

        return parent::setDescriptionEn($descriptionEn);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionEn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionEn', array());

        return parent::getDescriptionEn();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomFr($nomFr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomFr', array($nomFr));

        return parent::setNomFr($nomFr);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomFr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomFr', array());

        return parent::getNomFr();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomEn($nomEn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomEn', array($nomEn));

        return parent::setNomEn($nomEn);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomEn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomEn', array());

        return parent::getNomEn();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', array($prix));

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', array());

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function addInscri(\soleil\AgendaBundle\Entity\Inscri $inscris)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInscri', array($inscris));

        return parent::addInscri($inscris);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInscri(\soleil\AgendaBundle\Entity\Inscri $inscris)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInscri', array($inscris));

        return parent::removeInscri($inscris);
    }

    /**
     * {@inheritDoc}
     */
    public function getInscris()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInscris', array());

        return parent::getInscris();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbJour($nbJour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbJour', array($nbJour));

        return parent::setNbJour($nbJour);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbJour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbJour', array());

        return parent::getNbJour();
    }

}

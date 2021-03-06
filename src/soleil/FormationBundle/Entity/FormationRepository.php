<?php

namespace soleil\FormationBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FormationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FormationRepository extends EntityRepository
{
        public function getFormationParSite(){
        
            $domaine = $_SERVER['HTTP_HOST'];

            $qb = $this->createQueryBuilder('f');

            $qb ->join('f.site', 's');

            $qb->where('s.domaine = :dom');
            $qb->setParameter('dom', $domaine);

            return $qb->getQuery()->getResult();
        
        }
}

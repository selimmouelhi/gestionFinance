<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 06/07/2018
 * Time: 17:23
 */

namespace FGS\GestionComptesBundle\Entity;


use Doctrine\ORM\EntityRepository;

class ReclamationRepository extends EntityRepository
{


    public function MesReclamationsDQL($id2)
    {
        $q = $this->getEntityManager()
            ->createQuery('SELECT a FROM FGSGestionComptesBundle:Reclamation a  WHERE  a.utilisateur = :id2')
            ->setParameter('id2', $id2);

        return $q->getResult();

    }
}
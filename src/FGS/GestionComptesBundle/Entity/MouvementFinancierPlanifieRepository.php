<?php

namespace FGS\GestionComptesBundle\Entity;

/**
 * MouvementFinancierPlanifieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MouvementFinancierPlanifieRepository extends \Doctrine\ORM\EntityRepository
{
	public function getMouvementsFinanciersPlanifiesForUtilisateur($utilisateurId)
	{

		return $this->createQueryBuilder('mfp')
			->addSelect('c')
			->addSelect('b')
			->leftJoin('mfp.compte','c')
			->leftJoin('c.banque', 'b')
			->leftJoin('c.utilisateur', 'u')
			->andWhere('u.id = ?1')
			->setParameter('1', $utilisateurId)
			->getQuery()->getResult();
				
	}
}

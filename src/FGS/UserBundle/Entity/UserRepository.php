<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 08/07/2018
 * Time: 18:02
 */

namespace FGS\UserBundle\Entity;


use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{

    public function AllUsersDQL($roles)
{
    $q = $this->getEntityManager()
        ->createQuery('SELECT a FROM FGSUserBundle:User a  WHERE a.roles = :roles')
        ->setParameter('roles', $roles);

    return $q->getResult();

}

}
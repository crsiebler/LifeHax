<?php

namespace LifeHax\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 */
class UserRepository extends EntityRepository {
    public function getAllByRole($role) {
        $qb = $this->createQueryBuilder('u');
        $qb->select('u')
                ->innerJoin('u.userRoles', 'r')
                ->where('r = :role')
                ->setParameter('role', $role)
                ->orderBy('u.lastName', 'ASC')
                ->addOrderBy('u.firstName', 'ASC');
        
        return $qb->getQuery()->getResult();
    }
    
    public function search($searchTerm, $role) {
        $terms = array();
        
        // If Search Term has a space in it then explode
        // First Index use for First Name Search
        // Second Index use for Last Name Index
        if (false === strstr($searchTerm, " ")) {
            $qb = $this->createQueryBuilder('u');
            $qb->select('u')
                ->innerJoin('u.userRoles', 'r')
                ->where($qb->expr()->andx(
                            $qb->expr()->orx('u.firstName LIKE :term', 'u.lastName LIKE :term'),
                            $qb->expr()->eq('r', ':role')
                        ))
                ->setParameter('term', '%'.$searchTerm.'%')
                ->setParameter('role', $role)
                ->orderBy('u.lastName', 'ASC')
                ->addOrderBy('u.firstName', 'ASC');
        } else {
            // Separate Search Term into each word
            $terms = explode(" ", $searchTerm);
            
            $qb = $this->createQueryBuilder('u');
            $qb->select('u')
                ->innerJoin('u.userRoles', 'r')
                ->where($qb->expr()->andx(
                            $qb->expr()->orx(
                                $qb->expr()->orx('u.firstName LIKE :term1', 'u.lastName LIKE :term1'),
                                $qb->expr()->orx('u.firstName LIKE :term2', 'u.lastName LIKE :term2')),
                            $qb->expr()->eq('r', ':role')
                        ))
                ->setParameter('term1', '%'.$terms[0].'%')
                ->setParameter('term2', '%'.$terms[1].'%')
                ->setParameter('role', $role)
                ->orderBy('u.lastName', 'ASC')
                ->addOrderBy('u.firstName', 'ASC');
        }
        
        return $qb->getQuery()->getResult();
    }
}

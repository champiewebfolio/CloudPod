<?php
 
namespace CloudPod\UserBundle\Entity;
 
use Doctrine\ORM\EntityRepository;

class UserProfileRepository extends EntityRepository
{
    public function getUserProfile($id)
    {
            $query = $this->getEntityManager()
            ->createQuery('SELECT p FROM CloudPodUserBundle:UserProfile p WHERE p.userProfileID = :id')
            //->createQuery('SELECT p, u FROM CloudPodUserBundle:UserProfile p JOIN CloudPodUserBundle:User u WITH p.userProfileID = u.userID WHERE p.userProfileID = :id')
            //->createQuery('SELECT p.firstName FROM CloudPodUserBundle:UserProfile p JOIN CloudPodUserBundle:User u WITH p.userProfileID = u.userID WHERE p.userProfileID = :id')
            ->setParameter('id', $id);

        try {
        return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
        
        return $e;}
        
    }




}
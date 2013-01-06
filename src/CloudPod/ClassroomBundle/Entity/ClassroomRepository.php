<?php
 
namespace CloudPod\ClassroomBundle\Entity;
 
use Doctrine\ORM\EntityRepository;

class ClassroomRepository extends EntityRepository
{
    public function getClassroomID($id)
    {
            $query = $this->getEntityManager()
            ->createQuery('SELECT c FROM CloudPodClassroomBundle:Classroom c WHERE c.classID = :id')
            ->setParameter('id', $id);

        try {
        return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
        
        return $e;}
        
    }

   /* public function getClassroomAnnouncements($id)
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT a FROM CloudPodClassroomBundle:Classroom a WHERE a.classID = :id')
            ->setParameter('id', $id);

         return $query->getResult();

    }*/




}
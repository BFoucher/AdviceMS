<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class AdviceRepository
 * @package App\Repository
 */
class AdviceRepository extends EntityRepository
{
    /**
     * @param string $thread
     * @return array
     */
    public function getAllAdviceForThread(string $thread): array
    {
        $qb = $this->createQueryBuilder("ad");

        $qb
            ->where($qb->expr()->eq("ad.thread", ":thread"))
            ->setParameter("thread", $thread)
        ;

        return $qb->getQuery()->getResult();
    }
}

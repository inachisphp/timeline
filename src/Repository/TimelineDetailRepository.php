<?php

namespace Inachis\Component\Timeline\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Inachis\Component\Timeline\Entity\TimelineDetail;

/**
 * @extends ServiceEntityRepository<TimelineDetail>
 */
class TimelineDetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TimelineDetail::class);
    }
}

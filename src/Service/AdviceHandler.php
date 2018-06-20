<?php

namespace App\Service;

use App\Entity\Advice;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class AdviceHandler
 * @package App\Service
 */
class AdviceHandler
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * AdviceHandler constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param string $thread
     */
    public function removeAdviceForThread(string $thread): void
    {
        $repo = $this->entityManager->getRepository(Advice::class);

        $advices = $repo->getAllAdviceForThread($thread);

        foreach ($advices as $advice) {
            $this->entityManager->remove($advice);
        }

        $this->entityManager->flush();
    }
}
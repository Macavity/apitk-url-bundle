<?php
declare(strict_types=1);

namespace Shopping\ApiTKUrlBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Shopping\ApiTKUrlBundle\Exception\PaginationException;
use Shopping\ApiTKUrlBundle\Service\ApiService;

/**
 * Class ApiRepository
 * @package Shopping\ApiTKUrlBundle\Repository
 */
class ApiToolkitRepository extends ServiceEntityRepository
{

    /**
     * @param ApiService $apiService
     * @return array
     * @throws NonUniqueResultException
     * @throws PaginationException
     */
    public function findByRequest(ApiService $apiService): array
    {
        $queryBuilder = $this->createQueryBuilder('a');

        $apiService->applyToQueryBuilder($queryBuilder);

        return $queryBuilder->getQuery()->getResult();
    }
}
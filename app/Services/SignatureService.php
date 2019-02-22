<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2019/2/22
 * Time: 17:06
 */

namespace App\Services;


use App\Repositories\SignatureRepository;

class SignatureService
{
    protected $repository;

    /**
     * SignatureService constructor.
     * @param SignatureRepository $repository
     */
    public function __construct(SignatureRepository $repository)
    {
        $this->repository = $repository;
    }

    public function Create(array $attributes)
    {
        return $this->repository->create($attributes);
    }

    public function Paginate(int $page = 15)
    {
        return $this->repository->paginate($page);
    }
}

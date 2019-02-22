<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SignatureRepository;
use App\Entities\Signature;
use App\Validators\SignatureValidator;

/**
 * Class SignatureRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SignatureRepositoryEloquent extends BaseRepository implements SignatureRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Signature::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return SignatureValidator::class;
    }
    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}

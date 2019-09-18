<?php

namespace App\Repositories;

class DbUserRespository implements UserRepository
{
  public function create($attributes)
  {
    dd('creating the user');
  }
  
}
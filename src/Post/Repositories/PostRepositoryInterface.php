<?php

namespace Etsh\Post\Repositories;

interface PostRepositoryInterface
{
    public function all();
 
    public function find($id);
 
    public function store(array $input);

    public function update(array $input);

    public function delete($id);
}
<?php

 namespace App\Repositories;

 use App\Http\Requests\BlogRequest;
 use Illuminate\Http\Request;

 interface BlogRepositoryInterface
 {

     public function getData(Request $request);

     public function update(string $lang, int $id, BlogRequest $request);

     public function store(string $lang, BlogRequest $request);

     public function delete(int $id);
 }

<?php

 namespace App\Repositories;

 use Illuminate\Http\Request;
 use App\Http\Requests\Admin\BlogRequest;

 interface BlogRepositoryInterface
 {

     public function getData(Request $request);

     public function update(string $lang, int $id, BlogRequest $request);

     public function store(string $lang, BlogRequest $request);

     public function delete(int $id);
 }
 
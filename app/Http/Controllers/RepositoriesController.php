<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository as Repository;
use App\Http\Requests\RepositoryRequest;

use GrahamCampbell\GitHub\Facades\GitHub as Github;

class RepositoriesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $orderBy = 'repo_updated_at';
    $direction = 'desc';
    $repositories = Repository::orderBy($orderBy, $direction)->get();

    return view('repositories.index')
            ->withRepositories($repositories)
            ->withOrderBy($orderBy)
            ->withDirection($direction);
  }

  /**
   * Display the specified resource.
   *
   * @param  string  $orderBy
   * @param  string  $direction
   * @return \Illuminate\Http\Response
   */
  public function show($orderBy, $direction)
  {
    $repositories = Repository::orderBy($orderBy, $direction)
                              ->get();

    return view('repositories.index')
            ->withRepositories($repositories)
            ->withOrderBy($orderBy)
            ->withDirection($direction);
  }

  /**
   * Display the specified resource.
   *
   * @param  RepositoryRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function search(RepositoryRequest $request)
  {
    $orderBy = 'repo_updated_at';
    $direction = 'desc';
    $repositorySearched = '%'.$request->name.'%';

    $repositories = Repository::where('name', 'like', $repositorySearched)
                              ->orderBy('name', 'asc')
                              ->orderBy($orderBy, $direction)
                              ->get();

    return view('repositories.index')
            ->withRepositories($repositories)
            ->withOrderBy($orderBy)
            ->withDirection($direction);
  }
}

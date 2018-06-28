@extends('layouts.app')

@section('title', 'Repositorios de The GitHub Training Team')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">Repositorios de The GitHub Training Team</h1>
          </div>

          <div class="panel-body">
            <h2>Teaching the world how to effectively use the GitHub collaboration platform.</h2>

            @searchForm()
            @endsearchForm
          </div>

          <div class="list-group">
            @if ($repositories->count() <= 0)
              <h3 class="list-group-item">No hay repositorios disponibles.</h3>
            @else
              @nav([
                'orderBy' => $orderBy,
                'direction' => $direction,
              ])
              @endnav

              @foreach ($repositories as $repository)
                @repositoryListItem([
                  'loop' => $loop,
                  'repository' => $repository,
                ])
                @endrepositoryListItem
              @endforeach
            @endif
          </div>

          <div class="panel-footer clearfix">
            <span class="pull-right">Prueba realizada por <a href="mailto:jesus.garciav@me.com" title="Correo de Jesús García" target="_blank">Jesús García</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

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
            <p>Teaching the world how to effectively use the GitHub collaboration platform</p>
          </div>

          <ul class="list-group">
            @foreach ($repositories as $repository => $attribute)
              <li class="list-group-item">
                <p>
                  <strong>
                    <a
                      href="{{ $attribute['html_url'] }}"
                      title="{{ $attribute['name'] }}"
                      target="_blank">
                      {{ $attribute['name'] }}
                    </a>
                  </strong>
                  Actualizado: @php \Carbon($attribute['updated_at']) @endphp
                </p>
              </li>
            @endforeach
          </ul>

          <div class="panel-footer"></div>
        </div>
      </div>
    </div>
  </div>
@endsection

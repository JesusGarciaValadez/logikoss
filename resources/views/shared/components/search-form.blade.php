<form
  class="form-horizontal"
  action="{{ route('repositories.search') }}"
  method="post">{{-- Search Repository Form --}}
  @csrf
  <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
    <label
      for="name"
      class="col-xs-12 col-sm-4 col-md-3 col-lg-2 control-label">Nombre del repositorio: </label>
    <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
      <input
        type="text"
        class="form-control"
        id="name"
        name="name"
        required
        autofocus>
      @if ($errors->has('name'))
      <p class="help-block alert alert-danger" role="alert">
        <strong>{{ $errors->first('name') }}</strong>
      </p>
      @endif
    </div>

  </div>

  <div class="form-group">
    <div class="col-xs-12 text-center">
      <button
        type="submit"
        class="btn btn-primary"
        id="search"
        name="search">Buscar repositorio</button>
    </div>
  </div>
  <div class="form-group">
    <div class="col-xs-12 text-center">
      <p>
        <a
          href="{{ route('repositories.index') }}"
          class="btn btn-default">Mostrar todos los repositorios.
        </a>
      </p>
    </div>
  </div>
</form>

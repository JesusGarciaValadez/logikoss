<li class="list-group-item">
  <h3 class="list-group-item-heading">Ordenar por:</h3>
  <ul class="nav nav-tabs nav-justified">
    <li
      role="presentation"
      @if(
        $orderBy === 'repo_created_at' &&
        $direction === 'asc'
      )
        class="active"
      @endif>
      <a href="{{ route('repositories.orderBy', [
        'orderBy' => 'repo_created_at',
        'direction' => 'asc',
      ]) }}">
        <span
          class="glyphicon glyphicon-sort-by-order"
          aria-hidden="true"></span> Fecha de creación
      </a>
    </li>
    <li
      role="presentation"
      @if(
        $orderBy === 'repo_created_at' &&
        $direction === 'desc'
      )
        class="active"
      @endif>
      <a href="{{ route('repositories.orderBy', [
        'orderBy' => 'repo_created_at',
        'direction' => 'desc',
      ]) }}">
        <span
          class="glyphicon glyphicon-sort-by-order-alt"
          aria-hidden="true"></span> Fecha de creación
      </a>
    </li>
    <li
      role="presentation"
      @if(
        $orderBy === 'repo_updated_at' &&
        $direction === 'asc'
      )
        class="active"
      @endif>
      <a href="{{ route('repositories.orderBy', [
        'orderBy' => 'repo_updated_at',
        'direction' => 'asc',
      ]) }}">
        <span
          class="glyphicon glyphicon-sort-by-order"
          aria-hidden="true"></span> Último commit
      </a>
    </li>
    <li
      role="presentation"
      @if(
        $orderBy === 'repo_updated_at' &&
        $direction === 'desc'
      )
        class="active"
      @endif>
      <a href="{{ route('repositories.orderBy', [
        'orderBy' => 'repo_updated_at',
        'direction' => 'desc',
      ]) }}">
        <span
          class="glyphicon glyphicon-sort-by-order-alt"
          aria-hidden="true"></span> Último commit
      </a>
    </li>
  </ul>
</li>

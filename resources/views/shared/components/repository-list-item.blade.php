<a
  class="list-group-item"
  href="{{ $repository->html_url }}"
  title="{{ $repository->full_name }}"
  target="_blank">
  <h4 class="list-group-item-heading">{{ $loop->iteration }}. {{ $repository->name }}</h4>
  <p class="list-group-item-text"><strong>Repositorio actualizado:</strong> {{ $repository->repo_updated_at }}</p>
  <p class="list-group-item-text"><strong>Repositorio creado:</strong> {{ $repository->repo_created_at }}</p>
</a>

@if (count($errors) > 0)
  <div class="alert alert-danger alert-dismissible fade show mb-3">
    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
      &times;
    </button>
    <h4 class="alert-heading">Whoops!</h4>
    <p>Something went wrong!</p>
    <hr>
    @foreach ($errors->all() as $error)
      <p class="mb-0">{{ $error }}<p>
    @endforeach
  </div><!-- /.alert -->
@endif

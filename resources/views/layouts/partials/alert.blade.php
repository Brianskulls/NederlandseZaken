<!-- Display errors with larvelcollective (laravelcollective.com for documentation) -->
@if (count($errors) > 0)
  @foreach($errors->all() as $error)
    <div class="">
      {{ $error }}
    </div>
  @endforeach
@endif

<!-- Display fout -->
@if (session('Fout'))
  <div class="">
    {{ session('Fout')}}
  </div>
@endif

<!-- Display gelukt -->
@if (session('Gelukt'))
  <div class="">
    {{ session('Gelukt')}}
  </div>
@endif

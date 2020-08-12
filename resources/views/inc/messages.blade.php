@if(count($errors)>0)
    <!-- $errors is an object so to ittarate through it we need all() -->
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

<!-- Session error -->

@if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
@endif

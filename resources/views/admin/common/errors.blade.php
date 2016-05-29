 @if (count($errors) > 0)
    <div class="alert alert-error text-error text-left alert-dismissible" role="alert">
        @foreach ($errors->all() as $error)
            <p>{{$error }}</p>
        @endforeach
    </div>
@endif


@extends('Customer.welcome')
@section('viewRentedBikes')

    {!! Form::open(['url' => 'viewRentedBikes']) !!}

    <div class ="container">

        <div class = "form-group"">
        {!! Form::label('bike', ' ') !!}
        {!! Form::select('bike',  null, ['class' => 'form-control']) !!}
    </div>
    <div class = "form-group">

        {!! Form::submit(null, ['class' => 'btn btn-primary form-control']) !!}

    </div>

    @include('errors/list')

    </div>

@endsection
@extends('welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة لجنة</h3>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            {{session()->get('success')}}
        </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route($model.'.store')}}" method="POST">
            @csrf

            {!! form_text('total') !!}
            @error('total')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('fixed_money') !!}
            @error('fixed_money')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('changable_money') !!}
            @error('changable_money')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('discount') !!}
            @error('discount')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_text('deserved_money') !!}
            @error('deserved_money')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('squad_id',0,'squad') !!}
            @error('squad_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            <!-- /.card-body -->

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>



@endsection
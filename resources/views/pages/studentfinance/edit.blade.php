@extends('welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل لجنة</h3>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            {{session()->get('success')}}
        </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route($model.'.update',$obj->id)}}" method="POST">
            @csrf
            @method('PUT')


            {!! form_text('paid',$obj->paid) !!}
            @error('paid')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('rest_money',$obj->rest_money) !!}
            @error('rest_money')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('money_from_prev_years',$obj->money_from_prev_years) !!}
            @error('money_from_prev_years')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            {!! form_select('finance_id',0,'total') !!}
            @error('finance_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('student_id',$obj->student_id) !!}
            @error('student_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('paid_date',$obj->paid_date) !!}
            @error('paid_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('paid_id_number',$obj->paid_id_number) !!}
            @error('paid_id_number')
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
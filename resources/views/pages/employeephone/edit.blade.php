@extends('welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل تلفون الموظف</h3>
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


            {!! form_text('phone','الهاتف',$obj->phone) !!}
            @error('phone')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('employee_id','اسم_الموظف_رباعيا',$obj->employee_id,"full_name") !!}
            @error('employee_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror
            <!-- /.card-body -->

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تاكيد</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>

@endsection
@extends('welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة موظف</h3>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            {{session()->get('success')}}
        </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route($model.'.store')}}" method="POST" enctype="multipart/form-data">
            @csrf


            {!! form_text('full_name','اسم_الموظف_رباعيا') !!}
            @error('full_name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('birth_day','تاريخ_الميلاد') !!}
            @error('birth_day')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_file('image','صوره') !!}
            @error('image')
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
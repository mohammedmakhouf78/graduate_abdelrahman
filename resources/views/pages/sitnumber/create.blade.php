@extends('welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة رقم جلوس </h3>
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



            {!! form_select('student_id','اسم_الطالب_رباعيا') !!}
            @error('student_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_text('sit_number1','1رقم_جلوس_الطالب') !!}
            @error('sit_number1')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_text('sit_number2','2رقم_جلوس_الطالب') !!}
            @error('sit_number2')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_text('sit_number3','3رقم_جلوس_الطالب') !!}
            @error('sit_number')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror
            {!! form_text('sit_number3','4رقم_جلوس_الطالب') !!}
            @error('sit_number')
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
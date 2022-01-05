@extends('welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافه ملاحظة</h3>
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


            {!! form_text('note','ملاحظة') !!}
            @error('note')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_date('note_date','تاريخ_الملاحظة') !!}
            @error('note_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('type_id',0,'type','نوع_الملاحظة') !!}
            @error('type_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('student_id','اسم_الطالب_رابعيا') !!}
            @error('student_id')
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
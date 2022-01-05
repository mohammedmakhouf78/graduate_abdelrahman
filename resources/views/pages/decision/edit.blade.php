@extends('welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل رقم تلفون لمستخدم</h3>
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


            {!! form_text('decision','القرار',$obj->decision) !!}
            @error('decision')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_date('decision_date','تاريخ_القرار',$obj->decision_date) !!}
            @error('decision_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('type_id','نوع_القرار',$obj->type_id,'type') !!}
            @error('type_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('student_id','اسم_الطالب',$obj->student_id) !!}
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
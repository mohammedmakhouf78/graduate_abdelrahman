@extends('welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل رسوب</h3>
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

            {!! form_select('student_id','اسم الطالب',$obj->student_id) !!}
            @error('student_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_select('squad_id','الفرقة',$obj->squad_id,'squad') !!}
            @error('squad_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_select('subject_id1','اسم_المادة',$obj->subject_id1) !!}
            @error('subject_id1')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_select('subject_id2','اسم_المادة',$obj->subject_id2) !!}
            @error('subject_id2')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_select('subject_id3','اسم_المادة',$obj->subject_id3) !!}
            @error('subject_id3')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تاكيد</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>

@endsection
@extends('welcome')

@section('content')



<div class="col-md-6">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة رسوب</h3>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            {{session()->get('success')}}
        </div>
        @endif
        <form action="{{route($model.'.store')}}" method="POST">
            @csrf

            {!! form_select('student_id','اسم الطالب') !!}
            @error('student_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('squad_id1','الفرقة1',0,'squad') !!}
            @error('squad_id1')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_select('squad_id2','الفرقة2',0,'squad') !!}
            @error('squad_id2')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_select('squad_id3','الفرقة3',0,'squad') !!}
            @error('squad_id3')
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
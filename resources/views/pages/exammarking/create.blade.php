@extends('welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة تصحيح اختبار</h3>
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


            {!! form_text('degree','الدرجة') !!}
            @error('degree')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('marking_date','تاريخ_التصحيح') !!}
            @error('marking_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('exam_id','اسم_الطالب') !!}
            @error('exam_id')
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
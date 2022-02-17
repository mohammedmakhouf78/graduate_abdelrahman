@extends('welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة الماليات</h3>
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

            {!! form_text('total','اجمالي_المصروفات_السنوية') !!}
            @error('total')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('fixed_money','مصروفات_ثابتة') !!}
            @error('fixed_money')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('changable_money','مصروفات_متغيرة') !!}
            @error('changable_money')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('discount','الخصم') !!}
            @error('discount')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_text('deserved_money','المبلغ_المستحق') !!}
            @error('deserved_money')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('squad_id','الفرقة',0,'squad') !!}
            @error('squad_id')
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
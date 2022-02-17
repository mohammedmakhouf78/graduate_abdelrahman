@extends('welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل الماليات</h3>
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


            {!! form_text('total','اجمالي_المصروفات_السنوية',$obj->total) !!}
            @error('total')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('fixed_money','مصروفات_ثابتة',$obj->fixed_money) !!}
            @error('fixed_money')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('changable_money','مصروفات_متغيرة',$obj->changable_money) !!}
            @error('changable_money')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('discount','الخصم',$obj->discount) !!}
            @error('discount')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_text('deserved_money','المبلغ_المستحق',$obj->deserved_money) !!}
            @error('deserved_money')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('squad_id','الفرقة',$obj->squad_id,'squad') !!}
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
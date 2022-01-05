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


            {!! form_text('total',$obj->total,'اجمالي_المصروفات_السنوية') !!}
            @error('total')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('fixed_money',$obj->fixed_money,'مصروفات_ثابتة') !!}
            @error('fixed_money')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('changable_money',$obj->changable_money,'مصروفات_متغيرة') !!}
            @error('changable_money')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('discount',$obj->discount,'الخصم') !!}
            @error('discount')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_text('deserved_money',$obj->deserved_money,'المبلغ_المستحق') !!}
            @error('deserved_money')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('squad_id',$obj->squad_id,'الفرقة','squad') !!}
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
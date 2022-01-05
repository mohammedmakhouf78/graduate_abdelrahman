@extends('welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة مصروفات طالب</h3>
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

            {!! form_text('paid','المبلغ_المدفوع') !!}
            @error('paid')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('rest_money','المبلغ_المستحق') !!}
            @error('rest_money')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('money_from_prev_years','مبالغ_من_سنوات_سابقة') !!}
            @error('money_from_prev_years')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            {!! form_select('finance_id',0,'total','اجمالي_المصروفات_السنوية') !!}
            @error('finance_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('student_id','اسم_الطالب_رباعيا') !!}
            @error('student_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('paid_date','تاريخ_الدفع') !!}
            @error('paid_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('paid_id_number','رقم_قسيمة_الدفع') !!}
            @error('paid_id_number')
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
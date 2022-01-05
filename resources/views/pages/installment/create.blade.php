@extends('welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة قسط</h3>
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

            {!! form_text('value','مبلغ_القسط') !!}
            @error('value')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('pay_date','تاريخ_الدفع') !!}
            @error('pay_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            <div class="card-body">
                <div class="form-group">
                    <label for="student_finance_id">ماليات_الطالب</label>
                    <select class="form-control" name="student_finance_id" id="student_finance_id">
                        @foreach (\App\Models\StudentFinance::get() as $item)
                        <option value="{{$item->id}}">{{$item}}</option>
                        @endforeach
                    </select>
                </div>
                @error('student_finance_id')
                <p class="text-danger" id="myError">{{$message}}</p>
                @enderror
            </div>


            <!-- /.card-body -->

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تاكيد</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>



@endsection
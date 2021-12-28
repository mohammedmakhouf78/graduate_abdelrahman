@extends('welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل لجنة</h3>
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


            {!! form_text('value',$obj->value) !!}
            @error('value')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('pay_date',$obj->pay_date) !!}
            @error('pay_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            <div class="card-body">
                <div class="form-group">
                    <label for="student_finance_id">Student Finance</label>
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
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>

@endsection
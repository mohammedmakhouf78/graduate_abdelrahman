@extends('welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة رقم تلفون لمستخدم</h3>
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


            {!! form_textarea('decision','القرار') !!}
            @error('decision')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_date('decision_date','تاريخ_القرار') !!}
            @error('decision_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            <div class="card-body">
                <div class="form-group">
                    <label for="type_id">النوع</label>
                    <select class="form-control" name="type_id" id="type_id">
                        @foreach (\App\Models\DecisionType::get() as $item)
                        <option value="{{$item->id}}">{{$item->type}}</option>
                        @endforeach
                    </select>
                </div>
                @error('type_id')
                <p class="text-danger" id="myError">{{$message}}</p>
                @enderror
            </div>


            {!! form_select('student_id','اسم_الطالب') !!}
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
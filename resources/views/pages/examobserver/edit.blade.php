@extends('welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل مراقب الامتحان</h3>
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


            <div class="card-body">
                <div class="form-group">
                    <label for="observer_id">اسم_مراقب_الامتحان</label>
                    <select class="form-control" name="observer_id" id="observer_id">
                        @foreach (\App\Models\Observer::with('employee')->get() as $item)
                        <option value="{{$item->id}}">{{$item->employee->full_name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('observer_id')
                <p class="text-danger" id="myError">{{$message}}</p>
                @enderror
            </div>



            {!! form_select('exam_id','اسم_مادة_الامتحان',0,$obj->exam_id) !!}
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
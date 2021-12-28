@extends('welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">اضافة معيد</h3>
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

            <div class="card-body">
                <div class="form-group">
                    <label for="professor_id">Professor</label>
                    <select class="form-control" name="professor_id" id="professor_id">
                        @foreach (\App\Models\Professor::with('employee')->get() as $item)
                        <option value="{{$item->id}}">{{$item->employee->full_name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('professor_id')
                <p class="text-danger" id="myError">{{$message}}</p>
                @enderror
            </div>



            {!! form_select('subject_id') !!}
            @error('subject_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            <div class="card-body">
                <div class="form-group">
                    <label for="professor_assistant_id">Professor</label>
                    <select class="form-control" name="professor_assistant_id" id="professor_assistant_id">
                        @foreach (\App\Models\ProfessorAssistant::with('employee')->get() as $item)
                        <option value="{{$item->id}}">{{$item->employee->full_name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('professor_assistant_id')
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
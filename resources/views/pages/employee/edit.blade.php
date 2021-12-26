@extends('welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل القسم</h3>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            {{session()->get('success')}}
        </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route($model.'.update',$obj->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            {!! form_text('full_name',$obj->full_name) !!}
            @error('full_name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('birth_day',$obj->birth_day) !!}
            @error('birth_day')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_file('image',$obj->image) !!}
            @error('image')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror
            <!-- /.card-body -->

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>

@endsection
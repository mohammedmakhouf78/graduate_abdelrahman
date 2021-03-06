@extends('welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل موقف من التجنيد</h3>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            {{session()->get('success')}}
        </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('army.update',$army->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="army">موقف من التجنيد</label>
                    <input type="text" class="form-control" id="army" placeholder="اكتب هنا" name="army"
                        value="{{$army->army}}">
                </div>
                @error('army')
                <p class="text-danger" id="myError">يجب ادخال موقف التجنيد </p>
                @enderror
            </div>
            <!-- /.card-body -->

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary swalDefaultSuccess">تأكيد</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>

@endsection
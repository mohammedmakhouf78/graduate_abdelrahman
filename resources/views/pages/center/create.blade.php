@extends('welcome')

@section('content')



<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">إضافة مركز</h3>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            {{session()->get('success')}}
        </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('center.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="center">اسم المركز</label>
                    <input type="text" class="form-control" id="center" placeholder="اكتب هنا" name="center">
                </div>
                @error('center')
                <p class="text-danger" id="myError">يجب ادخال اسم المركز </p>
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
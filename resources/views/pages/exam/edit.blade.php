@extends('welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل الاختبار</h3>
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

            {!! form_text('name',$obj->name,'اسم_الطالب') !!}
            @error('name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('exam_date',$obj->exam_date,'تاريخ_الاختبار') !!}
            @error('exam_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror

            {!! form_text('full_mark',$obj->full_mark,'الدرجة') !!}
            @error('full_mark')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('subject_id',$obj->subject_id,'اسم_المادة') !!}
            @error('subject_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('department_id',$obj->department_id,'department','الشعبة') !!}
            @error('department_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            {!! form_select('squad_id',$obj->squad_id,'squad','الفرقة') !!}
            @error('squad_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            <div class="card-body">
                <div class="form-group">
                    <label for="professor_id">Professor</label>
                    <select class="form-control" name="professor_id" id="professor_id">
                        @foreach (\App\Models\Professor::with('employee')->get() as $item)
                        <option value="{{$item->id}}">{{$item->employee->full_name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('professor_id','دكتور_المادة')
                <p class="text-danger" id="myError">{{$message}}</p>
                @enderror
            </div>


            <div class="card-body">
                <div class="form-group">
                    <label for="professor_assistant_id">Professor Assistant</label>
                    <select class="form-control" name="professor_assistant_id" id="professor_assistant_id">
                        @foreach (\App\Models\ProfessorAssistant::with('employee')->get() as $item)
                        <option value="{{$item->id}}">{{$item->employee->full_name}}</option>
                        @endforeach
                    </select>
                </div>
                @error('professor_assistant_id','معيد_المادة')
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
@extends('welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل طالب</h3>
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



            {!! form_text('name','اسم_الطالب_رباعيا',$obj->name) !!}
            @error('name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('hold_number','رقم القيد',$obj->hold_number) !!}
            @error('hold_number')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('father_job','وظيفة الأب',$obj->father_job) !!}
            @error('father_job')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('mother_job','وظيفة الأم',$obj->mother_job) !!}
            @error('father_job')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('religion','الديانة',$obj->religion) !!}
            @error('religion')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('mother_name','اسم_الام',$obj->mother_name) !!}
            @error('mother_name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_check('gender','مذكر',$obj->gender) !!}
            @error('gender')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('birth_date','تاريخ_الميلاد',$obj->birth_date) !!}
            @error('birth_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('study_year','السنة_الدراسية',$obj->study_year) !!}
            @error('study_year')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('coming_date','تاريخ_القدوم',$obj->coming_date) !!}
            @error('coming_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('home_phone','هاتف_المنزل',$obj->home_phone) !!}
            @error('home_phone')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('identity_card','رقم_البطاقة',$obj->identity_card) !!}
            @error('identity_card')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_file('image','صورة') !!}
            @error('image')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('status_id','حالة الطالب',$obj->status_id,'status') !!}
            @error('status_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('nationality_id','الجنسية',$obj->nationality_id,'nationality') !!}
            @error('nationality_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('city_id','المحافظة',$obj->city_id,'city') !!}
            @error('city_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('center_id','المركز',$obj->center_id,'center') !!}
            @error('center_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('qualification_id','المؤهل_الحاصل_عليه',$obj->qualification_id,'qualification') !!}
            @error('qualification_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('army_id','موقف_من_التجنيد',$obj->army_id,'army') !!}
            @error('army_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('squad_id','الفرقة',$obj->squad_id,'squad') !!}
            @error('squad_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror
            {!! form_select('department_id','الشعبة',$obj->department_id,'department') !!}
            @error('department_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            <div class="card-body">
                <div class="form-group">
                    <label for="coming_from">الجهة_المحول_منها</label>
                    <select class="form-control" name="coming_from" id="coming_from">
                        @foreach (\App\Models\Organization::get() as $item)
                        <option value="{{$item->id}}">{{$item->organization}}</option>
                        @endforeach
                    </select>
                </div>
                @error('coming_from')
                <p class="text-danger" id="myError">{{$message}}</p>
                @enderror
            </div>


            <div class="card-body">
                <div class="form-group">
                    <label for="going_to">الجهة_المحول_اليها</label>
                    <select class="form-control" name="going_to" id="going_to">
                        @foreach (\App\Models\Organization::get() as $item)
                        <option value="{{$item->id}}">{{$item->organization}}</option>
                        @endforeach
                    </select>
                </div>
                @error('going_to')
                <p class="text-danger" id="myError">{{$message}}</p>
                @enderror
            </div>



            <div class="card-body">
                <div class="form-group">
                    <label for="payment_state_id">حالة_الدفع</label>
                    <select class="form-control" name="payment_state_id" id="payment_state_id">
                        @foreach (\App\Models\PaymentState::get() as $item)
                        <option value="{{$item->id}}">{{$item->state}}</option>
                        @endforeach
                    </select>
                </div>
                @error('payment_state_id')
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
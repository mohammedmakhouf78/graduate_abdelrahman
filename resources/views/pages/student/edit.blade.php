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
        <form action="{{route($model.'.update',$obj->id)}}" method="POST">
            @csrf
            @method('PUT')



            {!! form_text('name',$obj->name,'اسم_الطالب_رباعيا') !!}
            @error('name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            {!! form_text('mother_name',$obj->mother_name,'اسم_الام') !!}
            @error('mother_name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_check('gender',$obj->gender,'النوع') !!}
            @error('gender')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('birth_date',$obj->birth_date,'تاريخ_الميلاد') !!}
            @error('birth_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('study_year',$obj->study_year,'السنة_الدراسية') !!}
            @error('study_year')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('coming_date',$obj->coming_date,'تاريخ_القدوم') !!}
            @error('coming_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('home_phone',$obj->home_phone,'هاتف_المنزل') !!}
            @error('home_phone')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('identity_card',$obj->identity_card,'رقم_البطاقة') !!}
            @error('identity_card')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_file('image','صوره') !!}
            @error('image')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('status_id',$obj->status_id,'status','حالة_الطالب') !!}
            @error('status_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('nationality_id',$obj->nationality_id,'nationality','الجنسية') !!}
            @error('nationality_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('city_id',$obj->city_id,'city','المحافظة') !!}
            @error('city_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('center_id',$obj->center_id,'center','المركز') !!}
            @error('center_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('qualification_id',$obj->qualification_id,'qualification','المؤهل_الحاصل_عليه') !!}
            @error('qualification_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('army_id',$obj->army_id,'army','موقف_من_التجنيد') !!}
            @error('army_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('squad_id',$obj->squad_id,'squad','الفرقة') !!}
            @error('squad_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror
            {!! form_select('department_id',$obj->department_id,'department','الشعبة') !!}
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
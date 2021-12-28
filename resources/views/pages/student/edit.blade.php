@extends('welcome')

@section('content')

<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">تعديل معيد</h3>
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



            {!! form_text('name',$obj->name) !!}
            @error('name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            {!! form_text('mother_name',$obj->mother_name) !!}
            @error('mother_name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_check('gender',$obj->gender) !!}
            @error('gender')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('birth_date',$obj->birth_date) !!}
            @error('birth_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('study_year',$obj->study_year) !!}
            @error('study_year')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('coming_date',$obj->coming_date) !!}
            @error('coming_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('home_phone',$obj->home_phone) !!}
            @error('home_phone')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('identity_card',$obj->identity_card) !!}
            @error('identity_card')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_file('image') !!}
            @error('image')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('status_id',$obj->status_id,'status') !!}
            @error('status_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('nationality_id',$obj->nationality_id,'nationality') !!}
            @error('nationality_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('city_id',$obj->city_id,'city') !!}
            @error('city_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('center_id',$obj->center_id,'center') !!}
            @error('center_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('qualification_id',$obj->qualification_id,'qualification') !!}
            @error('qualification_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('army_id',$obj->army_id,'army') !!}
            @error('army_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('squad_id',$obj->squad_id,'squad') !!}
            @error('squad_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror
            {!! form_select('department_id',$obj->department_id,'department') !!}
            @error('department_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            <div class="card-body">
                <div class="form-group">
                    <label for="coming_from">Coming from</label>
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
                    <label for="going_to">Going to</label>
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
                    <label for="payment_state_id">Payment State</label>
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
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>

@endsection
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

            {!! form_text('name') !!}
            @error('name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror



            {!! form_text('mother_name') !!}
            @error('mother_name')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_check('gender') !!}
            @error('gender')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('birth_date') !!}
            @error('birth_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('study_year') !!}
            @error('study_year')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_date('coming_date') !!}
            @error('coming_date')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('home_phone') !!}
            @error('home_phone')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_text('identity_card') !!}
            @error('identity_card')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_file('image') !!}
            @error('image')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('status_id',0,'status') !!}
            @error('status_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('nationality_id',0,'nationality') !!}
            @error('nationality_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('city_id',0,'city') !!}
            @error('city_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('center_id',0,'center') !!}
            @error('center_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('qualification_id',0,'qualification') !!}
            @error('qualification_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('army_id',0,'army') !!}
            @error('army_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror


            {!! form_select('squad_id',0,'squad') !!}
            @error('squad_id')
            <p class="text-danger" id="myError">{{$message}}</p>
            @enderror
            {!! form_select('department_id',0,'department') !!}
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
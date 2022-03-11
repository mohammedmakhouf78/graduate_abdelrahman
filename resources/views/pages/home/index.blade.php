@extends('welcome')

@section('content')
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <a href="{{route('student.index')}}" class="info-box-icon bg-info elevation-1"><i
                    class="fas fa-user-graduate"></i></a>

            <div class="info-box-content">
                <span class="info-box-text">الطلبة</span>
                <span class="info-box-number">
                    {{App\Models\Student::count()}}
                    <small>طلاب</small>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <a href="{{route('studentfinance.index')}}" class="info-box-icon bg-danger elevation-1"><i
                    class="far fa-credit-card"></i></a>

            <div class="info-box-content">
                <span class="info-box-text">ماليات الطالب</span>
                <span class="info-box-number">
                    {{App\Models\StudentFinance::count()}}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <a href="{{route('employee.index')}}" class="info-box-icon bg-success elevation-1"> <i
                    class="fas fa-users"></i></a>

            <div class="info-box-content">
                <span class="info-box-text">الموظفين</span>
                <span class="info-box-number">
                    {{App\Models\Employee::count()}}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <a href="{{route('committy.index')}}" class="info-box-icon bg-warning elevation-1"><i
                    class="fas fa-school"></i></a>

            <div class="info-box-content">
                <span class="info-box-text">اللجان</span>
                <span class="info-box-number">
                    {{App\Models\Committy::count()}}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <a href="{{route('professor.index')}}" class="info-box-icon bg-info elevation-1"><i
                    class="fas fa-user-tie"></i></a>

            <div class="info-box-content">
                <span class="info-box-text">اعضاء هيئة التدريس</span>
                <span class="info-box-number">
                    {{App\Models\Professor::count()}}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <a href="{{route('professorassistant.index')}}" class="info-box-icon bg-danger elevation-1"><i
                    class="fas fa-user-tie"></i></a>

            <div class="info-box-content">
                <span class="info-box-text">المعيدين</span>
                <span class="info-box-number">
                    {{App\Models\ProfessorAssistant::count()}}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <a href="{{route('observer.index')}}" class="info-box-icon bg-success elevation-1"><i
                    class="far fa-eye"></i></a>

            <div class="info-box-content">
                <span class="info-box-text">المراقبين</span>
                <span class="info-box-number">
                    {{App\Models\Observer::count()}}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <a href="{{route('subject.index')}}" class="info-box-icon bg-warning elevation-1">
                <i class="fas fa-book ml-3 mr-3"></i>
            </a>

            <div class="info-box-content">
                <span class="info-box-text">المواد</span>
                <span class="info-box-number">
                    {{App\Models\Subject::count()}}
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>




<div class="card card-success">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" style="width:320px;height:200px;object-fit:cover"
                        src="{{asset('images/employees/1640133460_employee.jpeg')}}" alt="Dist Photo 1">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h5 class="card-title text-primary text-white">Card Title</h5>
                        <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit sed do eiusmod tempor.</p>
                        <a href="#" class="text-white">Last update 2 mins ago</a>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>


@endsection
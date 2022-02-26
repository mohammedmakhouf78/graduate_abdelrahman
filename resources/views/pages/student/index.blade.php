@extends('welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">المعيدين</h3>
            <a href="{{route($model.'.create')}}" class="btn btn-success float-left">انشاء</a>
        </div>
        @if (session()->has('success'))
        <div class="alert alert-success" id="success">
            {{session()->get('success')}}
        </div>
        @endif
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>الرقم_التسلسلي</th>
                        <th>اسم_الطالب_رباعيا</th>
                        <th>اسم_الام</th>
                        <th>رقم القيد</th>
                        <th>وظيفة الأب</th>
                        <th>وظيفة الأم</th>
                        <th>الديانة</th>
                        <th>النوع</th>
                        <th>تاريخ_الميلاد</th>
                        <th>السنة_الدراسية</th>
                        <th>تاريخ_القدوم</th>
                        <th>هاتف_المنزل</th>
                        <th>رقم_البطاقة</th>
                        <th>صورة</th>
                        <th>حالة_الطالب</th>
                        <th>الجنسية</th>
                        <th>المحافظة</th>
                        <th>المركز</th>
                        <th>المؤهل_الحاصل_عليه</th>
                        <th>موقف_من_التجنيد</th>
                        <th>الفرقة</th>
                        <th>الشعبة</th>
                        <th>الجهة_المحول_منها</th>
                        <th>الجهة_المحول_اليها</th>
                        <th>حالة_الدفع</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $index => $item)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->mother_name}}</td>
                        <td>{{$item->hold_number}}</td>
                        <td>{{$item->father_job}}</td>
                        <td>{{$item->mother_job}}</td>
                        <td>{{$item->religion}}</td>
                        <td>{{$item->gender == 1 ? "مذكر" : "مؤنث"}}</td>
                        <td>{{$item->birth_date}}</td>
                        <td>{{$item->study_year}}</td>
                        <td>{{$item->coming_date}}</td>
                        <td>{{$item->home_phone}}</td>
                        <td>{{$item->identity_card}}</td>
                        <td>
                            <img style="width: 100px ; height:100px;object-fit:cover"
                                src="{{asset('images/students/' .$item->image)}}" alt="">
                        </td>
                        <td>{{$item->status->status ?? ""}}</td>
                        <td>{{$item->nationality->nationality ?? ""}}</td>
                        <td>{{$item->city->city ?? ""}}</td>
                        <td>{{$item->center->center ?? ""}}</td>
                        <td>{{$item->qualification->qualification ?? ""}}</td>
                        <td>{{$item->army->army ?? ""}}</td>
                        <td>{{$item->squad->squad ?? ""}}</td>
                        <td>{{$item->department->department ?? ""}}</td>
                        <td>{{$item->comingfrom->organization ?? ""}}</td>
                        <td>{{$item->goingto->organization ?? ""}}</td>
                        <td>{{$item->paymentState->state ?? ""}}</td>
                        <td class="text-right">
                            <a class="btn btn-primary mb-3" href="{{route($model.'.edit',$item->id)}}">
                                <i class="fas fa-pen"></i>
                            </a>
                            <form method="POST" action="{{route($model.'.destroy',$item->id)}}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{$item->id}}">
                                <button type="submit" class="btn btn-danger ml-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>الرقم_التسلسلي</th>
                        <th>اسم_الطالب_رباعيا</th>
                        <th>اسم_الام</th>
                        <th>رقم القيد</th>
                        <th>وظيفة الأب</th>
                        <th>وظيفة الأم</th>
                        <th>الديانة</th>
                        <th>النوع</th>
                        <th>تاريخ_الميلاد</th>
                        <th>السنة_الدراسية</th>
                        <th>تاريخ_القدوم</th>
                        <th>هاتف_المنزل</th>
                        <th>رقم_البطاقة</th>
                        <th>صورة</th>
                        <th>حالة_الطالب</th>
                        <th>الجنسية</th>
                        <th>المحافظة</th>
                        <th>المركز</th>
                        <th>المؤهل_الحاصل_عليه</th>
                        <th>موقف_من_التجنيد</th>
                        <th>الفرقة</th>
                        <th>الشعبة</th>
                        <th>الجهةالمحول_منها</th>
                        <th>الجهة_المحول_اليها</th>
                        <th>حالة_الدفع</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</div>


@endsection

@section('specificScript')
<!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": false, "lengthChange": false, "autoWidth": false,
        "scrollX": true,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>
@endsection
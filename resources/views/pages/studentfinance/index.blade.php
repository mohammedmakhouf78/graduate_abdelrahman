@extends('welcome')

@section('content')

<div class="col-12">

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">ماليات الطالب</h3>
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
                        <th>المبلغ_المدفوع</th>
                        <th>عدد_الاقساط</th>
                        <th>المبلغ_المستحق</th>
                        <th>مبالغ_من_سنوات_سابقة</th>
                        <th>مبلغ_القسط</th>
                        <th>اسم_الطالب_رباعيا</th>
                        <th>تاريخ_الدفع</th>
                        <th>رقم_قسيمة_الدفع</th>
                        <th>حذف وتعديل</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $index => $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->paid}}</td>
                        <td>{{$item->installment->number ?? ""}}</td>
                        <td>{{$item->rest_money}}</td>
                        <td>{{$item->money_from_prev_years}}</td>
                        <td>{{$item->finance_id}}</td>
                        <td>{{$item->student->name}}</td>
                        <td>{{$item->paid_date}}</td>
                        <td>{{$item->paid_id_number}}</td>
                        <td class="text-right">
                            <a class="btn btn-primary" href="{{route($model.'.edit',$item->id)}}">
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
                        <th>المبلغ_المدفوع</th>
                        <th>عدد_الاقساط</th>
                        <th>المبلغ_المستحق</th>
                        <th>مبالغ_من_سنوات_سابقة</th>
                        <th>إجمالي_المصروفات_السنوية</th>
                        <th>اسم_الطالب_رباعيا</th>
                        <th>تاريخ_الدفع</th>
                        <th>رقم_قسيمة_الدفع</th>
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
        "responsive": false, "lengthChange": true, "autoWidth": false,
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
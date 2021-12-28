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
                        @foreach ($columns as $column)
                        <th>{{$column}}</th>
                        @endforeach
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $index => $item)
                    <tr>
                        <td>{{++$index}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->mother_name}}</td>
                        <td>{{$item->gender}}</td>
                        <td>{{$item->birth_date}}</td>
                        <td>{{$item->study_year}}</td>
                        <td>{{$item->coming_date}}</td>
                        <td>{{$item->home_phone}}</td>
                        <td>{{$item->identity_card}}</td>
                        <td>{{$item->image}}</td>
                        <td>{{$item->status->status}}</td>
                        <td>{{$item->nationality->nationality}}</td>
                        <td>{{$item->city->city}}</td>
                        <td>{{$item->center->center}}</td>
                        <td>{{$item->qualification->qualification}}</td>
                        <td>{{$item->army->army}}</td>
                        <td>{{$item->squad->squad}}</td>
                        <td>{{$item->department->department}}</td>
                        <td>{{$item->coming_from->organization}}</td>
                        <td>{{$item->going_to->organization}}</td>
                        <td>{{$item->paymentState->state}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
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
                        @foreach ($columns as $column)
                        <th>{{$column}}</th>
                        @endforeach
                        <th>Action</th>
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
        "responsive": true, "lengthChange": true, "autoWidth": false,
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
@extends('back\layouts\master')
@section('title','Anasayfa')
@section('css')
  <link rel="stylesheet" href="{{asset('back')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('back')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('back')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  @endsection
@section('content')
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Language Table</h3>
                @include('back\layouts\partials\alert')
              </div>
              
              <div class="card-body">
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <a href="{{route('language.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Yeni</a>
                  <tr>

                    <th>Ad</th>
                    <th>Level</th>
                    <th>Islemler</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($languages as $language)
                  <tr>

                    <td>{{$language->name}}</td>
                    <td>
                      @if($language->seviyye == 'zeif')
                      <h4><span class="badge bg-danger">{{$language->seviyye}}</span></h4>
                      @elseif($language->seviyye == 'orta')
                      <h4><span class="badge bg-warning">{{$language->seviyye}}</span></h4>
                      @elseif($language->seviyye == 'yuksek')
                      <h4> <span class="badge bg-success">{{$language->seviyye}}</span></h4>
                       @endif
                    </td>
                         <td style="width: 100px">
                                    <a href="{{route('language.update',$language->id)}}" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" title="Duzenle">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                    <a href="{{route('language.delete',$language->id)}}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Eminmisiniz?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection()
@section('footer')
<script src="{{asset('back')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('back')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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
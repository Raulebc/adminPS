@extends('layouts.app')
@section('sidebar')
  @include('layouts.sidebar',['page'=>'student'])
@endsection

@section('content')
  <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="ibox ibox-fullheight">
              <div class="ibox-head">
                  <div class="ibox-title">Alumnos</div>
                  <div class="ibox-tools">

                  </div>
              </div>
              <div class="ibox-body">
                  <div class="flexbox mb-4">
                      <div class="flexbox">
                          <span class="flexbox mr-3">
                              <span class="mr-2 text-muted">Activos</span>
                              <span class="h3 mb-0 text-primary font-strong">310</span>
                          </span>
                          <span class="flexbox">
                              <span class="mr-2 text-muted">Inactivos</span>
                              <span class="h3 mb-0 text-pink font-strong">105</span>
                          </span>
                      </div>
                      <a class="flexbox" href="ecommerce_orders_list.html" target="_blank">VIEW ALL<i class="ti-arrow-circle-right ml-2 font-18"></i></a>
                  </div>
                  <div class="ibox-fullwidth-block">
                      <table id="students-table" class="table table-hover">
                          <thead class="thead-default thead-lg">
                              <tr>

                                  <th width="30%">Alumno</th>
                                  <th width="20%">Email</th>
                                  <th width="20%">Plan</th>
                                  <th width="10%">Status</th>
                                  <th width="20%" style="width:91px;" >Date</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach (App\Models\Student::all() as $student)
                              <tr>

                                  <td>
                                    <a class="media-img" href="javascript:;">
                                            <img class="img-circle" src="{{url('/img/users/'.$student->avatar)}}" alt="image" width="54" style="padding-right:20px;">
                                            {{$student->first_name}} {{$student->last_name}}
                                        </a>

                                  </td>
                                  <td>{{$student->email}}</td>
                                  <td>{{$student->plan}}</td>
                                  @if($student->status=='ACTIVO')
                                    <td><span class="badge badge-success badge-pills">ACTIVO</span> </td>
                                  @elseif($student->status=='INACTIVO')
                                    <td><span class="badge badge-danger badge-pills">INACTIVO</span> </td>
                                  @elseif($student->status=='DEUDA')
                                    <td><span class="badge badge-warning badge-pills">DEUDA</span> </td>
                                  @endif
                                  <td class="pr-4" style="width:91px;">{{$student->created_at}}</td>
                              </tr>
                             @endforeach

                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>



@endsection


@section('css') {{-- stylesheet para esta vista --}}
	<link href="{{asset('css/datatables.min.css')}}" rel="stylesheet" />
@endsection



@section('scripts') {{-- scripts para esta vista --}}
	{{--  datatable --}}
	<script src="{{ asset('js/datatables.min.js') }}"></script>
	<script>
		$(document).ready(function() {
				$('#students-table').DataTable({
					"paging": true,
					"ordering": true,
					"language": {
								"lengthMenu": "Mostrar _MENU_ elementos",
								"zeroRecords": "Sin resultados",
								"info": "Mostrando pagina _PAGE_ de _PAGES_",
								"infoEmpty": "Sin resultados",
								"infoFiltered": "(filtered from _MAX_ total records)",
								"search": "Filtrar:"
					}

				});
			});

	</script>
	{{--  End datatable --}}

@endsection
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
                    <a class="btn btn-success text-white" href="{{ url('/students/create')}}">Nuevo alumno</a>
                  </div>
              </div>
              <div class="ibox-body">
                  <div class="flexbox mb-4">
                      <div class="flexbox">

                          <span class="flexbox mr-3">
                            <div class="btn-group">
                                <button class="btn btn-outline-success">
                                    <span class="btn-icon">ACTIVOS</span>
                                </button>
                                <span class="btn-label-out btn-label-out-right btn-label-out-success pointing">340</span>
                            </div>
                          </span>
                          <span class="flexbox mr-3" >
                            <div class="btn-group">
                                <button class="btn btn-outline-danger">
                                    <span class="btn-icon">INACTIVOS</span>
                                </button>
                                <span class="btn-label-out btn-label-out-right btn-label-out-danger pointing">120</span>
                            </div>
                          </span>
                          <span class="flexbox mr-3">
                            <div class="btn-group">
                                <button class="btn btn-outline-warning">
                                    <span class="btn-icon">PRUEBA</span>
                                </button>
                                <span class="btn-label-out btn-label-out-right btn-label-out-warning pointing">13</span>
                            </div>
                          </span>
                      </div>
                  </div>
                  <div class="ibox-fullwidth-block">
                      <table id="students-table" class="table table-hover">
                          <thead class="thead-default thead-lg">
                              <tr>

                                  <th width="30%">Alumno</th>
                                  <th width="20%">Plan</th>
                                  <th width="10%">Dia de Pago</th>
                                  <th width="10%">Vencimiento</th>
                                  <th width="20%">Periodo</th>
                                  <th>
                                    acciones
                                  </th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach (App\Models\Student::all() as $student)
                              <tr>

                                  <td>
                                    <span class="badge-success badge-point"></span>
                                    <a class="media-img " href="{{url('/students/'.$student->id)}}">
                                            <img class="img-circle" src="{{url('/img/users/'.$student->avatar)}}" alt="image" width="54" style="padding-right:20px;">
                                            {{$student->first_name}} {{$student->last_name}}
                                        </a>


                                  </td>
                                  {{-- <td>{{$student->email}}</td> --}}
                                  <td>{{$student->plan}}</td>
                                  <td>03</td>
                                  <td>6 dias</td>
                                  <td>09-07-2018 al 09-08-2018</td>

                                  <td>
                                    <button class="btn btn-outline-info btn-icon-only btn-circle btn-sm btn-thick"><i class="la la-credit-card"></i></button>
                                    <button class="btn btn-outline-info btn-icon-only btn-circle btn-sm btn-thick"><i class="la la-send"></i></button>
                                  </td>

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


@extends('layouts.app')
@section('content')
<?php
	   use Carbon\Carbon;
     use App\Models\Empleador;
     use App\Models\Usuario;
     use App\Models\Ciudad;
     Carbon::setLocale(config('app.locale'));

?>
<section class="content">
	<div class="row">
	   <br/>
	</div>
	<div class="row">
	   <div class="col-md-12">
			 <div >
					<ul class="nav nav-tabs " role="tablist">
					   <li role="presentation" class="active" ><a href="#pendiente" aria-controls="pendiente" role="tab" data-toggle="tab">Pendientes</a></li>
					   <li role="presentation" 								><a href="#aceptado"  aria-controls="aceptado"  role="tab" data-toggle="tab">Aceptados</a></li>
					   <li role="presentation"							  ><a href="#rechazado" aria-controls="rechazado" role="tab" data-toggle="tab">Rechazados</a></li>
					</ul>
				</div>
				<div class="tab-content ">
					 <div role="tabpanel" class="tab-pane fade in active" id="pendiente">
						    <div class="panel-body">

									<div class="container">
									 <div class="row">
										@if (!empty($ofertas1))
										 @foreach($ofertas1 as $item)
											<div class="col-lg-4 col-md-4 col-sm-6">
													<div class="single-blog" >
														 <a href="{{ route('ofertas.show', $item->id) }}"   >
																 <img src="{{ $item->url_imagen }}" class="img-responsive center-block "   >
																 <h2>{{ $item->nombre }}</h2>
																 <ul class="post-meta">
																		 <li><i class="fa fa-pencil-square-o"></i><strong> Publicado por: </strong> {{ Empleador::where([ ['id', '=',$item->empleador_id] ] )->first()->empresa  }}</li>
																		 <li><i class="fa fa-clock-o"></i><strong> {{ date('d-m-Y H:i', strtotime($item->created_at  ))   }}</strong></li>
																 </ul>
																 <div class="blog-content">
																		 <p> {{ $item->descripcion }}.</p>
																 </div>
																 <hr/>
																 <div class="blog-content">
																			 <p> {{ Ciudad::find($item->ciudad_id)->first()->descripcion }}  - {{ $item->direccion }}   </p>
																			 <h5 class='text-right color_bprecio' > <i class="fa fa-usd" aria-hidden="true"></i>  {{ $item->paga }} COP.<h5>
																 </div>
														 </a>
												 </div>
											 </div>
											@endforeach
									 @else
									 			@include('zvistas.notrabajos')
										@endif
									</div>
								 </div>


						   </div>
					 </div>
					 <div role="tabpanel" class="tab-pane fade" id="aceptado">
						  <div class="panel-body">

								<div class="container">
								 <div class="row">
									@if (!empty($ofertas2))
									 @foreach($ofertas2 as $item)
										<div class="col-lg-4 col-md-4 col-sm-6">
												<div class="single-blog" >
													 <a href="{{ route('ofertas.show', $item->id) }}"   >
															 <img src="{{ $item->url_imagen }}" class="img-responsive center-block "   >
															 <h2>{{ $item->nombre }}</h2>
															 <ul class="post-meta">
																	 <li><i class="fa fa-pencil-square-o"></i><strong> Publicado por: </strong> {{ Empleador::where([ ['id', '=',$item->empleador_id] ] )->first()->empresa  }}</li>
																	 <li><i class="fa fa-clock-o"></i><strong> {{ date('d-m-Y H:i', strtotime($item->created_at  ))   }}</strong></li>
															 </ul>
															 <div class="blog-content">
																	 <p> {{ $item->descripcion }}.</p>
															 </div>
															 <hr/>
															 <div class="blog-content">
																		 <p> {{ Ciudad::find($item->ciudad_id)->first()->descripcion }}  - {{ $item->direccion }}   </p>
																		 <h5 class='text-right color_bprecio' > <i class="fa fa-usd" aria-hidden="true"></i>  {{ $item->paga }} COP.<h5>
															 </div>
													 </a>
											 </div>
										 </div>
										@endforeach
								 @else
											@include('zvistas.notrabajos')
									@endif
								</div>
							 </div>



						   </div>
					 </div>
					 <div role="tabpanel" class="tab-pane fade" id="rechazado">
						  <div class="panel-body">

								<div class="container">
								<div class="row">
								 @if (!empty($ofertas3))
									@foreach($ofertas3 as $item)
									 <div class="col-lg-4 col-md-4 col-sm-6">
											 <div class="single-blog" >
													<a href="{{ route('ofertas.show', $item->id) }}"   >
															<img src="{{ $item->url_imagen }}" class="img-responsive center-block "   >
															<h2>{{ $item->nombre }}</h2>
															<ul class="post-meta">
																	<li><i class="fa fa-pencil-square-o"></i><strong> Publicado por: </strong> {{ Empleador::where([ ['id', '=',$item->empleador_id] ] )->first()->empresa  }}</li>
																	<li><i class="fa fa-clock-o"></i><strong> {{ date('d-m-Y H:i', strtotime($item->created_at  ))   }}</strong></li>
															</ul>
															<div class="blog-content">
																	<p> {{ $item->descripcion }}.</p>
															</div>
															<hr/>
															<div class="blog-content">
																		<p> {{ Ciudad::find($item->ciudad_id)->first()->descripcion }}  - {{ $item->direccion }}   </p>
																		<h5 class='text-right color_bprecio' > <i class="fa fa-usd" aria-hidden="true"></i>  {{ $item->paga }} COP.<h5>
															</div>
													</a>
											</div>
										</div>
									 @endforeach
								@else
										 @include('zvistas.notrabajos')
								 @endif
							 </div>
							</div>


						   </div>
					 </div>
				</div>


	   </div>
	</div>
</section>
@endsection

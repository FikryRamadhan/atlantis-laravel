@extends('layouts.template')


@section('content')
<div class="panel-header bg-danger-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
			</div>
		</div>
	</div>
</div>

<div class="page-inner mt--5">
	<div class="row mt--2">
		<div class="col-lg-4 col-md-12">
			<div class="card card-stats card-round">
				<div class="card-body">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="fa fa-bed text-success"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category"> Total Ruangan </p>
								<h4 class="card-title"> 100 </h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-12">
			<div class="card card-stats card-round">
				<div class="card-body ">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="flaticon-cart-1 text-danger"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category"> Total Ruangan Terpakai </p>
								<h4 class="card-title"> 7 </h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-12">
			<div class="card card-stats card-round">
				<div class="card-body ">
					<div class="row">
						<div class="col-5">
							<div class="icon-big text-center">
								<i class="flaticon-credit-card text-primary"></i>
							</div>
						</div>
						<div class="col-7 col-stats">
							<div class="numbers">
								<p class="card-category"> Ruangan CheckIn </p>
								<h4 class="card-title"> 10 </h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
@endsection


@section('scripts')
<script>
	$(function(){
		$('#dataTable').DataTable();
	})
</script>
@endsection

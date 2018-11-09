@extends('layouts.app')

@section('title', 'Themes')

@section('content')
	<div class="flex items-center justify-between border-b pb-4 mb-8 text-grey-darker">
		<div>
			<div class="text-xs font-medium uppercase tracking-wide text-grey-dark mb-1">Presentation</div>
			<h1>Themes</h1>
		</div>
		<div>
			<a href="#" class="inline-flex items-center no-underline py-2 px-4 rounded bg-blue text-blue-lightest font-semibold hover:bg-blue-dark hover:text-white text-sm uppercase tracking-wide">
				<i data-feather="plus-circle" class="h-5 w-5 mr-2"></i>
				New Theme
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-8">
			<div class="block w-full rounded bg-white border overflow-hidden mb-8">
				<div class="py-3 px-6 uppercase tracking-wide text-grey-dark font-semibold text-sm">
					Themes to be installed
				</div>

				<!-- <div class="py-3 px-6 bg-grey-lightest text-xs uppercase tracking-wide font-semibold text-grey-dark border-t border-b">
					<div class="row">
						<div class="col-4">Name</div>
						<div class="col-4">Location</div>
					</div>
				</div> -->

				<div class="py-3 px-6">
					<div class="row">
						<div class="col-4">
							Atmosphere
						</div>
						<div class="col-4 font-mono text-grey-dark text-sm font-medium">
							themes/atmosphere
						</div>
						<div class="col-4 justify-end">
							<a href="#" class="flex items-center rounded-sm py-1 px-2 text-2xs font-semibold uppercase tracking-wide no-underline bg-grey-lighter text-grey-darker hover:bg-grey-light">
								Install
							</a>
						</div>
					</div>
				</div>
				<div class="py-3 px-6 bg-grey-lightest">
					<div class="row">
						<div class="col-4">
							Space
						</div>
						<div class="col-4 font-mono text-grey-dark text-sm font-medium">
							themes/space
						</div>
						<div class="col-4 justify-end">
							<a href="#" class="flex items-center no-underline text-grey-dark hover:text-grey-darkest">
								<i data-feather="arrow-right-circle" class="h-5 w-5 leading-none"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="rounded bg-white border overflow-hidden">
		<div class="flex items-center justify-between py-3 px-6">
			<div>
				<div class="flex items-center">
					<i data-feather="search" class="h-5 w-5 mr-2 text-grey"></i>
					<input type="text" class="appearance-none text-grey-darker" placeholder="Search">
				</div>
			</div>

			<div>
				<a href="#" class="flex items-center rounded p-2 text-grey-dark hover:bg-grey-lighter hover:text-grey-darker">
					<i data-feather="more-horizontal" class="h-5 w-5 leading-none"></i>
				</a>
			</div>
		</div>

		<div class="py-3 px-6 bg-grey-lightest text-xs uppercase tracking-wide font-semibold text-grey-dark border-t border-b">
			<div class="row">
				<div class="col-3">Name</div>
				<div class="col-3">Location</div>
				<div class="col-3">Status</div>
			</div>
		</div>

		<div>
			<div class="py-3 px-6">
				<div class="row">
					<div class="col-3">
						Pulsar
					</div>
					<div class="col-3 font-mono text-grey-dark text-sm font-medium">
						themes/pulsar
					</div>
					<div class="col-3">
						<div class="inline-flex items-center py-1 px-3 bg-green-lightest border border-green-lighter text-green-dark rounded-full font-medium text-sm leading-none">
							Active
						</div>
					</div>
					<div class="col-3 justify-end">
						<a href="#" class="flex items-center rounded p-1 text-grey-dark hover:text-grey-darker">
							<i data-feather="edit" class="h-5 w-5"></i>
						</a>
						<a href="#" class="flex items-center rounded p-1 text-red hover:text-red-dark">
							<i data-feather="trash" class="h-5 w-5"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="py-3 px-6 bg-grey-lightest">
				<div class="row">
					<div class="col-3">
						Titan
					</div>
					<div class="col-3 font-mono text-grey-dark text-sm font-medium">
						themes/titan
					</div>
					<div class="col-3">
						<div class="inline-flex items-center py-1 px-3 bg-green-lightest border border-green-lighter text-green-dark rounded-full font-medium text-sm leading-none">
							Active
						</div>
					</div>
					<div class="col-3 justify-end">
						<a href="#" class="flex items-center rounded p-1 text-grey-dark hover:text-grey-darker">
							<i data-feather="edit" class="h-5 w-5"></i>
						</a>
						<a href="#" class="flex items-center rounded p-1 text-red hover:text-red-dark">
							<i data-feather="trash" class="h-5 w-5"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="py-3 px-6">
				<div class="row">
					<div class="col-3">
						Material
					</div>
					<div class="col-3 font-mono text-grey-dark text-sm font-medium">
						themes/material
					</div>
					<div class="col-3">
						<div class="inline-flex items-center py-1 px-3 bg-red-lightest border border-red-lighter text-red-dark rounded-full font-medium text-sm leading-none">
							Inactive
						</div>
					</div>
					<div class="col-3 justify-end">
						<a href="#" class="flex items-center rounded p-1 text-grey-dark hover:text-grey-darker">
							<i data-feather="edit" class="h-5 w-5"></i>
						</a>
						<a href="#" class="flex items-center rounded p-1 text-red hover:text-red-dark">
							<i data-feather="trash" class="h-5 w-5"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="py-3 px-6 bg-grey-lightest">
				<div class="row">
					<div class="col-3">
						Sunny
					</div>
					<div class="col-3 font-mono text-grey-dark text-sm font-medium">
						themes/sunny
					</div>
					<div class="col-3">
						<div class="inline-flex items-center py-1 px-3 bg-green-lightest border border-green-lighter text-green-dark rounded-full font-medium text-sm leading-none">
							Active
						</div>
					</div>
					<div class="col-3 justify-end">
						<a href="#" class="flex items-center rounded p-1 text-grey-dark hover:text-grey-darker">
							<i data-feather="edit" class="h-5 w-5"></i>
						</a>
						<a href="#" class="flex items-center rounded p-1 text-red hover:text-red-dark">
							<i data-feather="trash" class="h-5 w-5"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

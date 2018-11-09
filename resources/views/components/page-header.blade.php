<div class="flex items-center justify-between border-b pb-4 mb-8 text-grey-darker">
	<div>
		<div class="text-xs font-medium uppercase tracking-wide text-grey-dark mb-1">
			{{ $section }}
		</div>

		<h1>{{ $title }}</h1>
	</div>

	@if (isset($controls))
		<div>
			{!! $controls !!}
		</div>
	@endif
</div>

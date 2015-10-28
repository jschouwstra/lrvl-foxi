@extends ('master')

@section('pageTitle')
<h1>Users</h1>
@endsection

@section('content')

User|bijbehorende hond:</br>
	@foreach($users as $user)
		<h1>{{ $user->name}}</h1>
		@if($user->dog)
			<ul>
				<li>{{ $user->dog->name }}</li>
				<li>{{ $user->dog->color }}</li>
				<li>{{ $user->dog->born_at->format('d M Y') }}</li>
				<li>{{ $user->dog->breed->name }}</li>
			</ul>
			Ingeënt voor:
			<ul>
			@foreach($user->dog->shots as $shot)
				@if($shot !== null)
					<li>{{$shot->name}}</li>
				@else
					<li>Geen inenting</li>
				@endif

			@endforeach
			</ul>
		@endif
	@endforeach

{{-- 	@foreach($dogs as $dog)
		{{$dog->name}}
		{{$dog->shots}}
	@endforeach --}}


@endsection

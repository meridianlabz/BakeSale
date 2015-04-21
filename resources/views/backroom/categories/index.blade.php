@extends('layouts.backroom')

@section('content')
<div class="row">
	<div class="large-12 columns">
		
		<section class="categories list">

			<hgroup>
				<h2>Categories</h2>
				<h4 class="subheader">The full list of categories</h4>
			</hgroup>

			<br>
			
			<table class="fullspan">
				<thead>
					<tr>
						<th>Name</th>
						<th>Description</th>
						<th>Approved</th>
						<th>Modify</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($categories as $category)
					<tr>
						<td>
							<a href="{{ url('backroom/categories/'.$category->id) }}">{{ $category->name }}</a>
						</td>
						<td>{{ $category->description }}</td>
						<td>{{ $category->approved == 1 ? 'yes' : 'no' }}</td>
						<td>
							<a href="#" class="button tiny radius">Edit</a></li>
							<a href="#" class="button tiny radius alert">Delete</a>
						</td>	
					</tr>
					@endforeach
				</tbody>
			</table>
		</section>

	</div>
</div>
@endsection
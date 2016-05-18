@extends('layouts.external_user_form_layout')

@section('combine_form_layout')

@include('external_user_forms.sign_in_form')
<?php
echo "<hr>";
?>
@include('external_user_forms.create_account_form')

@stop
		<html>
			<body>
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
			</body>	
		</html>
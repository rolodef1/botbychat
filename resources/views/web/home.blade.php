@extends('web.template.main')

@section('title','BotByChat') 

@section('content')
<div id="home">
	<div class="parallax-container gradient">
		<div class="parallax"></div>
	</div>
	<div class="section white">
		<div class="row container">
			<h2 class="header">Bot by chat</h2>
			<p class="grey-text text-darken-3 lighten-3">Construye un bot de facebook sin programar</p>
		</div>
	</div>
	<div class="parallax-container gradient">
		<div class="parallax"></div>
	</div>    
</div>
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function () {
		$('.parallax').parallax();
	});
</script>
@endsection
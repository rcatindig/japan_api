<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
			{!! Form::myInput('text', 'name', 'Name') !!}
		
			{!! Form::myInput('text', 'location', 'Location') !!}

			{!! Form::mySelect('city_id', 'City', $cities, null, ['class' => 'form-control']) !!}

			{!! Form::myFile('photo_url', 'Image') !!}

			{!! Form::myTextArea('description', 'Description') !!}
	
			
		</div>  
	</div>
	@if (isset($item) && $item->avatar)
		<div class="col-sm-4">
			<div class="bgc-white p-20 bd">
				<img src="{{ $item->avatar }}" alt="">
			</div>
		</div>
	@endif
</div>
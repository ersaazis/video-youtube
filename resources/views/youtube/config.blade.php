<form action="{{ route('video.config.save') }}" method="POST">
	{{ csrf_field() }}
	<input type="text" name="api" placeholder="KODE API" value="{{ $youtubeApi }}">
	<input type="submit" value="save">
</form>
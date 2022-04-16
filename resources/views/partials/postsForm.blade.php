{{ csrf_field() }}
<label for="name">Name:</label>
<input name="title" type="text" value="{{ $title ?? '' }}"><br>
<label for="description">Body:</label>
<input name="body" type="text" value="{{ $body ?? '' }}"><br>
<input type="submit" value="{{ $buttonName }}">
<br>

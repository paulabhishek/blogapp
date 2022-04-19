{{ csrf_field() }}
<label for="name">Name:</label>
<input name="title" type="text" value="{{ $title ?? '' }}"><br>
<label for="description">Body:</label>
<textarea required="required" placeholder="Enter Your post here" name = "body" ></textarea><br>
<label for="file">File:</label>
<input type="file" name="file" accept="image/*"><br>
<input type="submit" value="{{ $buttonName }}">
<br>

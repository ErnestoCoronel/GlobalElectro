<label>

Title <br>
<input name= "title" type ='text' value="{{ old('title', $post->Title)}}">

@error('title')
    <br>
    <small style="color: red">{{$message}}</small>
@enderror
</label><br>

<label>

body <br>
<textarea name= "Body" value="{{ old('body', $post->body)}}"></textarea>
@error('body')
    <br>
    <small style="color: red">{{$message}}</small>
@enderror

</label><br>
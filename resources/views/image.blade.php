<form action="{{route('uploadImage')}}" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}

    <div>
        upload image::::
        <br><br>
        <input type="file" id="image" name="image"><br><br>
        <input type = "submit" value="Upload">
    </div>
</form>
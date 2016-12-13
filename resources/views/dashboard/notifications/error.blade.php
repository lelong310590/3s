@if (count($errors) > 0)
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Lỗi !</strong>
        @foreach ($errors->all() as $e)
            {!! $e !!}<br>
        @endforeach
    </div>
@endif
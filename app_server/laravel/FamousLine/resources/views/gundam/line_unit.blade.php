<div class="container famousline_txt">
    <p class="famousline_txt--body">{{ $gundam_line->famousline }}</p>
</div>
<div class="clearfix mt-2">
    <a class="btn btn-primary btn-sm" href='{{ url("/{$gundam_line->title->path}/{$gundam_line->id}/edit") }}'>
        更新
    </a>
    <form class="d-inline-block" action="/gundam/{{$gundam_line->id}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <input class="btn btn-danger btn-sm" type="submit" name="" value="削除する">
    </form>
</div>
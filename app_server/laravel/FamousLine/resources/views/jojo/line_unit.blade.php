<div class="container famousline_txt">
    <p class="famousline_txt--body">{{ $jojo_line->famousline }}</p>
</div>
<div class="clearfix mt-2">
    <a class="btn btn-primary btn-sm" href='{{ url("/{$jojo_line->title->path}/{$jojo_line->id}/edit") }}'>
        更新
    </a>
    <form class="d-inline-block" action="/jojo/{{$jojo_line->id}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <input class="btn btn-danger btn-sm" type="submit" name="" value="削除する">
    </form>
</div>
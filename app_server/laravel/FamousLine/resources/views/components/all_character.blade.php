<div class="row">
    <div class="col">
        <div class="clearfix mb-3">
            <a class="ml-2 btn btn-primary btn-sm d-inline-block" href="/{{ $title_info->path }}characters/create">新規追加</a>
        </div>
        <table class="table">
            @foreach ($characters as $key => $chara)
            <tr>
                <th class="">{{ $key + 1 }}</th>
                <td>{{ $chara->character_name }}</td>
                <td><a href="/{{ $title_info->path }}characters/{{ $chara->character_id }}/edit" class="btn btn-primary">編集</a></td>
                <td>
                    <form action="/{{ $title_info->path }}characters/{{ $chara->id }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="id" value="{{ $chara->id }}">
                        <input class="btn btn-danger" type="submit" name="" value="削除する">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
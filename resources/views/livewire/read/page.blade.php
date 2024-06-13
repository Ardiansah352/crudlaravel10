<div>
    @foreach ($news as $index => $singleNews)
        {{$index+1}}.
        <span wire:click="read" style="color:blue; cursor:pointer;">
            <u>{{$single_News->messege}}</u>
        </span>
        &nbsp;&nbsp;
        <i wire:click="delete({{$singleNews -> $id}})" style="color:antiquewhite; cursor:pointer;" class="fas fa-xs fa-trash"></i>
        &nbsp;&nbsp;
        <i wire:click="edit({{$singleNews -> $id}})" style="color:black; cursor:pointer;" class="fas fa-xs fa-edit"></i>
        <br>
    @endforeach
</div>

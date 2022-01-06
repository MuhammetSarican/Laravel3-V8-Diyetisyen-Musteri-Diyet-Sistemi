<div>
    <input wire:model="search" name="search" type="text" class="navbar-search" list="mylist" placeholder="Search in Treatments..."/>

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
    {{-- The best athlete wants his opponent at his best. --}}
</div>

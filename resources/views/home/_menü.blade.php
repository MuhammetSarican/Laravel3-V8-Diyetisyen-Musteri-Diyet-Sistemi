<?php
$parentCategories = \App\Http\Controllers\HomeController::categorylist();
$setting = \App\Http\Controllers\HomeController::getsetting();
?>

<div class=" bg-primary text-white"
        style="width: 100% ;">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class=" text-left text-white">
                    <ul class="">
                        <li class="has-children">
                            <a>Categories</a>
                            <ul class="text-white">
                                @foreach($parentCategories as $rs)
                                    <li class="has-children">
                                        <a class="text-white" href="#">{{$rs->title}}</a>
                                        <ul class="text-white">
                                            @if(count($rs->children))
                                                @include('home.categorytree',['children'=>$rs->children])
                                            @endif
                                        </ul>
                                    </li>
                                @endforeach
                                <li class="has-children1">
                                    <a href="{{route('categoryalltreatments')}}">All</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php
    $parentCategories=\App\Http\Controllers\HomeController::categorylist()
?>
        <div class="category-nav">
    <span class="category-header">Categories<i class="fa fa-list"></i></span>
    <ul class="category-list">

        @foreach($parentCategories as $rs)
            <li class="dropdown side-dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$rs->title}}<i class="fa fa-angle-right"></i></a>
                <div class="custom-menu">
                    <div class="row">
                        @if(count($rs->children))
                            @include('home.categorytree',['children'=>$rs->children])
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>

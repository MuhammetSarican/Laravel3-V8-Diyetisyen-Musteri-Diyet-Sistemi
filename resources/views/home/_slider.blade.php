<div class="site-section">
    <div class="slideshow-container container">
        <?php
        $i=0;
        $j=0;
        ?>
        @foreach($slider as $sl)
            <?php
            $i++;
            ?>
            <div class="mySlides" id="peterparker">
                <div class="row justify-content-between">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h1 class="heading mb-3">You Should Try</h1>
                            <h2 class="text-primary">{{$sl->title}}</h2>
                            <h3>Treatment</h3>

                            <p class="mb-5"></p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($sl->image)}}" alt="Image" style="height: 300px;object-fit: cover" class="img-bg img-fluid">
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-unstyled ul-check primary">
                                        <li>Category: <h6 class="text-primary">{{$sl->category->title}}</h6></li>
                                        <li>Dietitian: <h6 class="text-primary">{{$sl->user->name}}</h6></li>
                                        <li>Created At: <h6 class="text-primary">{{$sl->created_at}}</h6></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('treatment',['id'=>$sl->id])}}" class="btn btn-primary" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">Show Treatment</a>
                    </div>
                </div>
                <br>
            </div>
        @endforeach
            <div style="text-align:center">
                @for(;$j<$i;$j++)
                    <span href="#peterparker" class="dot fas fa-angle-up"></span>
                @endfor
            </div>
    </div>
</div>

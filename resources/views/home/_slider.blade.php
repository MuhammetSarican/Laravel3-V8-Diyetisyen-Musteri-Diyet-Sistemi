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
                            <h2 class="heading mb-3">You Should Try</h2>
                            <h3>{{$sl->title}}</h3>
                            <h4>Treatment</h4>

                            <p class="mb-5"></p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($sl->image)}}" alt="Image" style="height: 300px;object-fit: cover" class="img-bg img-fluid">
                                </div>
                                <div class="col-lg-6">
                                    <ul class="list-unstyled ul-check primary">
                                        <h5>Price: {{$sl->price}}&nbsp;$</h5><br>
                                        <li>Voluptate delectus ipsa</li>
                                        <li>Maiores quia aliquam</li>
                                        <li>Consectetur adipisicing elit</li>
                                        <li>Voluptate delectus ipsa</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('treatment',['id'=>$lst->id])}}" class="btn btn-primary" onclick="return !window.open(this.href, '','top=50 left=50 height=1150 width=750')">Show Treatment</a>
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

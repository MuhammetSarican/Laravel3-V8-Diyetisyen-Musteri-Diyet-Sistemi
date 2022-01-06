
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif

{{--                        <p class="mb-0 font-weight-bold text-black">Address</p>--}}
{{--                        <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>--}}

{{--                        <p class="mb-0 font-weight-bold text-black">Phone</p>--}}
{{--                        <p class="mb-4"><a href="#">+1 232 3235 324</a></p>--}}

{{--                        <p class="mb-0 font-weight-bold text-black">Email Address</p>--}}
{{--                        <p class="mb-0"><a href="#">youremail@domain.com</a></p>--}}

                <form wire:submit.prevent="store">
                    @csrf
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="review">Your Rating</label>
                                <div class="-grin-stars">
                                    <input type="radio" id="star5" wire:model="rate" value="5"/><label for="star5"></label>
                                    <input type="radio" id="star4" wire:model="rate" value="4"/><label for="star4"></label>
                                    <input type="radio" id="star3" wire:model="rate" value="3"/><label for="star3"></label>
                                    <input type="radio" id="star2" wire:model="rate" value="2"/><label for="star2"></label>
                                    <input type="radio" id="star1" wire:model="rate" value="1"/><label for="star1"></label>
                                </div>
                            @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="subject">Subject</label>
                            <input type="subject" id="subject" class="form-control" wire:model="subject">
                            @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="review">Review</label>
                            <textarea wire:model="review" id="review" cols="30" rows="7" class="form-control"
                                      placeholder="Write your notes or questions here..."></textarea>
                            @error('review')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    @auth
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Review" class="btn btn-primary text-white">
                        </div>
                    </div>
                    @else
                    <a href="/login" class="btn btn-danger">Please Login Before Submit.</a>
                    @endauth
                </form>

@livewireScripts

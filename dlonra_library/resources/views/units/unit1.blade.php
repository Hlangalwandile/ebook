
        <div id="@php echo "unit-".$unit->id @endphp" class="container row d-flex align-items-center justify-content-center unit">
            @isset($unit->header)
                <h3>{{$unit->header}}</h3>
            @endisset
            @isset($unit->text)
            <div class="unitTextArea container">
                @php
                    echo htmlspecialchars_decode($unit->text, ENT_NOQUOTES);
                @endphp
            </div>
            @endisset
            <div class="row d-flex align-items-center justify-content-center">
                
                @if (!empty($unit->image1))
                    @php
                        $imageArray = $unit->image1;
                        $link = '';
                        if(isset($imageArray['name'])){
                            $link = 'storage/images/'.$imageArray['name'];
                        }
                    @endphp
                    <div class="col-md unit-img-col">
                        <img src="{{asset($link)}}" alt="{{asset($link)}}" >
                        <p>{{$imageArray['text']}}</p>
                    </div>
                @endif
                @if (!empty($unit->image2))
                    @php
                        $imageArray = $unit->image2;
                        $link = '';
                        if(isset($imageArray['name'])){
                            $link = 'storage/images/'.$imageArray['name'];
                        }
                    @endphp
                    <div class="col-md unit-img-col">
                        <img src="{{asset($link)}}" alt="{{asset($link)}}" >
                        <p>{{$imageArray['text']}}</p>
                    </div>
                @endif
                @if (!empty($unit->image3))
                    @php
                        $imageArray = $unit->image3;
                        $link = '';
                        if(isset($imageArray['name'])){
                            $link = 'storage/images/'.$imageArray['name'];
                        }
                    @endphp
                    <div class="col-md unit-img-col">
                        <img src="{{asset($link)}}" alt="{{asset($link)}}" >
                        <p>{{$imageArray['text']}}</p>
                    </div>
                @endif
                @if (!empty($unit->image4))
                    @php
                        $imageArray = $unit->image4;
                        $link = '';
                        if(isset($imageArray['name'])){
                            $link = 'storage/images/'.$imageArray['name'];
                        }
                    @endphp
                    <div class="col-md unit-img-col">
                        <img src="{{asset($link)}}" alt="{{asset($link)}}" >
                        <p>{{$imageArray['text']}}</p>
                    </div>
                @endif
            </div>  
        </div>


        <div id="@php echo "unit-".$unit->id @endphp" class="container row d-flex align-items-center justify-content-center unit">
            @isset($unit->header)
                <h3>{{$unit->header}}</h3>
            @endisset
           
            <div class="row d-flex align-items-center justify-content-center">
                @isset($unit->text)
                <div class="col unitTextArea">
                    @php
                        echo htmlspecialchars_decode($unit->text, ENT_NOQUOTES);
                    @endphp
                </div>
                @endisset
                @if (isset($unit->image1))
                    <div class="col unit-img-col">
                        <img src="https://dummyimage.com/250x250/000/fff" alt="">
                        <p>image</p>
                    </div> 
                @endif
                @if (isset($unit->image2))
                    <div class="col unit-img-col">
                        <img src="https://dummyimage.com/250x250/000/fff" alt="">
                        <p>image</p>
                    </div> 
                @endif
                @if (isset($unit->image3))
                    <div class="col unit-img-col">
                        <img src="https://dummyimage.com/250x250/000/fff" alt="">
                        <p>image</p>
                    </div> 
                @endif
                @if (isset($unit->image4))
                    <div class="col unit-img-col">
                        <img src="https://dummyimage.com/250x250/000/fff" alt="">
                        <p>image</p>
                    </div> 
                @endif
            </div>
            
        </div>

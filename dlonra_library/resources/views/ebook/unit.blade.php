@foreach ($units as $unit)
    @if ($unit->moduleID == $current_module)
    <div id="@php echo "unit-".$unit->id @endphp" class="unit">
        <h3>{{$unit->header}}</h3>
        @php
            echo htmlspecialchars_decode($unit->text, ENT_NOQUOTES);
        @endphp
    </div> 
    <br>
    @endif
@endforeach


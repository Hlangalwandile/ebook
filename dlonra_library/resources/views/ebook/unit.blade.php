@foreach ($units as $unit)
    Unit
    {{$current_module}}
    @if ($unit->moduleID == $current_module)
    <div id="@php echo "unit-".$unit->id @endphp" class="unit">
        <h3>{{$unit->header}}</h3>
        {{$unit->text}}
    </div> 
    <hr>
    @endif
@endforeach


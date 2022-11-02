@foreach ($units as $unit)
    @if ($unit->moduleID == $current_module)
        @if ($unit->type == 1)
            @include('units.unit1');
        @else
            @include('units.unit2');
        @endif
    @endif
@endforeach
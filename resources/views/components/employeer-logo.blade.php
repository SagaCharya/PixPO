@props(['employee', 'width' => 90])

@if ($employee && $employee->logo)
    <img src="{{ asset($employee->logo) }}" width="{{ $width }}" {{ $attributes }}>
@else
    <span>No logo available</span>
@endif
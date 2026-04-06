<button
    {{ $attributes->class([
        'admin-ui-btn',
        $typeClasses(),
        $variantClasses(),
        'admin-ui-btn-disabled' => $disabled,
    ]) }}
    @if($click) wire:click="{{ $click }}" @endif
    @if($disabled) disabled @endif
    type="button"
>
    @if($icon)
        <span class="admin-ui-btn-icon">{!! $icon !!}</span>
    @endif

    <span class="admin-ui-btn-title">{{ $title }}</span>
</button>

<?php

namespace NyxTex\AdminUiComponents\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public function __construct(
        public string $title = '',
        public ?string $icon = null,
        public ?string $click = null,
        public bool $disabled = false,
        public string $type = 'regular',
        public string $variant = 'primary',
    ) {}

    public function typeClasses(): string
    {
        return match ($this->type) {
            'slim' => 'admin-ui-btn-slim',
            'full-width' => 'admin-ui-btn-full-width',
            default => 'admin-ui-btn-regular',
        };
    }

    public function variantClasses(): string
    {
        return match ($this->variant) {
            'secondary' => 'admin-ui-btn-secondary',
            'accent' => 'admin-ui-btn-accent',
            'danger' => 'admin-ui-btn-danger',
            'ghost' => 'admin-ui-btn-ghost',
            default => 'admin-ui-btn-primary',
        };
    }

    public function render()
    {
        return view('admin-ui::components.button');
    }
}

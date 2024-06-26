@php
    /**
     * @var string $title
     * @var string $livewire
     * @var string $tabControlName
     * @var string $value
     * @var integer $element_index
     * @var integer $tabPageIndex location tab_controls.blade.php
     * @var \Modules\Form\app\Forms\Base\ModelBase $form_instance
     * @var array $content
     **/
    $tabPageName = 'tab' . $tabPageIndex;
@endphp
<div class="tab-pane show @if($tabPageIndex == 0) active @endif"
     id="{{ $tabControlName }}-{{ $tabPageName }}-content" role="tabpanel"
     aria-labelledby="{{ $tabControlName }}-{{ $tabPageName }}-tab" @if($livewire ?? null) wire:ignore.self @endif
>
    {{--When tab is disabled, tab buttons can't be pressed, so we don't need to render the content--}}
    @if(!$disabled)
        <div class="container">
            <div class="row">
                {!! $form_instance->renderElement('full_form', '', $content, get_defined_vars()); !!}
            </div>
        </div>
    @endif
</div>
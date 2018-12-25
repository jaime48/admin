@component('auth.message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# 糟糕!
@else
# 您好!
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
祝好,<br>融祥
@endif

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
如果您遇到问题无法点击 "{{ $actionText }}" 按钮, 请复制粘贴如下链接到浏览器: [{{ $actionUrl }}]({{ $actionUrl }})
@endcomponent
@endisset
@endcomponent

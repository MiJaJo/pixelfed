@component('mail::message')
# アカウント承認に新しい返答が届いています ({{ '#' . $activity->id}})

こんにちは。

**{{$activity->application->email}}** から、新しい返答が届いています。

<x-mail::panel>
<p style="white-space: pre-wrap;">{!! $activity->message !!}</p>
</x-mail::panel>

<x-mail::button :url="$activity->adminReviewUrl()" color="success">
<strong>返答をレビューする</strong>
</x-mail::button>

<a href="{{ config('app.url') }}">{{ config('pixelfed.domain.app') }}</a> より
<br>
<hr>
<p style="font-size:10pt;">このメールは送信専用アドレスより自動送信されています。このメールに返信してもお返事できかねますのでご了承ください。</p>
@endcomponent

@component('mail::message')
# {{config('pixelfed.domain.app')}} より新しいメッセージが届いています

こんにちは。

最近、マスコどん！ぴくちゃに **{{ $verify->username }}** のユーザー名で申請した方へ。

管理者からあなた宛にメッセージがあります。:

<x-mail::panel>
<p style="white-space: pre-wrap;">{{ $verify->message }}</p>
</x-mail::panel>

このメールへは返信しないでください。返信しても、メッセージは届きません。

<a href="{{ config('app.url') }}">{{ config('pixelfed.domain.app') }}</a> より
<br>
<hr>
<p style="font-size:10pt;">このメールは送信専用アドレスより自動送信されています。このメールに返信してもお返事できかねますのでご了承ください。</p>
@endcomponent

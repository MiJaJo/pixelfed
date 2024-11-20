@component('mail::message')
# 操作が必要です: 追加情報が必要です

**{{'@'.$verify->username}}** さん、こんにちは！

あなたの登録を続けるためには、追加の情報が必要です。

管理者ならびにモデレーターが、以下の情報を必要としています。

@component('mail::panel')
<p style="white-space: pre-wrap;">{!! $activity->message !!}</p>
@endcomponent
<x-mail::button :url="$activity->emailReplyUrl()" color="success">
<strong>返信する</strong>
</x-mail::button>

<p style="font-size:10pt;">最後にアクションがあってから7日経つと、あなたの申請は自動的に却下されてしまいますので、お早めにご返事ください。</p>
<br>

<a href="{{ config('app.url') }}">{{ config('pixelfed.domain.app') }}</a> より
@endcomponent

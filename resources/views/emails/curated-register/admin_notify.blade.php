@component('mail::message')
# [#{{$verify->id}}] 新しいアカウント承認が届きました

管理者さんこんばんは。

**新しいアカウント承認をレビューしてください**

<x-mail::panel>
<p>
<small>
ユーザー名: <strong>{{ $verify->username }}</strong>
</small>
<br>
<small>
Email: <strong>{{ $verify->email }}</strong>
</small>
</p>

<hr>

<small><strong>*このユーザーは以下の理由で登録を希望しています:*</strong></small>
<p style="font-size:9pt;">{!!str_limit(nl2br($verify->reason_to_join), 300)!!}</p>
</x-mail::panel>

<x-mail::button :url="$verify->adminReviewUrl()" color="success">
<strong>アカウント承認をレビューする</strong>
</x-mail::button>

<a href="{{ config('app.url') }}">{{ config('pixelfed.domain.app') }}</a> より
<br>
<hr>
<p style="font-size:10pt;">このメールは送信専用アドレスより自動送信されています。このメールに返信してもお返事できかねますのでご了承ください。</p>
@endcomponent

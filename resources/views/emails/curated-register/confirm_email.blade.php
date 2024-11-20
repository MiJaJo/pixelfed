@component('mail::message')
# 操作が必要です: マスコどん！ぴくちゃのアカウントを作成するには、メールの有効性を確認する必要があります。

**{{'@'.$verify->username}}** さん、こんにちは！

マスコどん！ぴくちゃのアカウント登録を継続するには、メールアドレスの有効性を確認する必要があります。
以下のボタンをクリックして、メールアドレスが有効であることを確認してください。

<x-mail::button :url="$verify->emailConfirmUrl()" color="success">
<strong>メールアドレスの有効性を確認する</strong>
</x-mail::button>


<p style="font-size:10pt;">もしあなたがアカウントの作成を望まない場合、このメールは無視してください。上記のボタンは24時間経つと無効になります。</p>
<br>

<a href="{{ config('app.url') }}">{{ config('pixelfed.domain.app') }}</a> より
<br>
<hr>
<p style="font-size:10pt;">このメールは送信専用アドレスより自動送信されています。このメールに返信してもお返事できかねますのでご了承ください。</p>
@endcomponent

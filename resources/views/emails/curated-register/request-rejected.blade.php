@component('mail::message')
**{{'@'.$verify->username}}** さん、こんにちは。


私達は、あなたが {{ config('pixelfed.domain.app') }} に登録できるかを審査しました。

審査の結果、残念ながらあなたのアカウントは承認されませんでした。

この決定はコミュニティ全体をベストに保つために行われました。ガイドラインを見て、何が問題だったかを確認し、将来的にあなたとお会いできる日をお待ちしています。

この決定をご理解ください。もしなにかの間違いだと思う場合や、質問がある場合は、お気軽に [こじょん](https://mascodon.jp/@cojohne) までご連絡ください。

<br>

<a href="{{ config('app.url') }}">{{ config('pixelfed.domain.app') }}</a> より
<br>
<hr>
<p style="font-size:10pt;">このメールは送信専用アドレスより自動送信されています。このメールに返信してもお返事できかねますのでご了承ください。</p>
@endcomponent

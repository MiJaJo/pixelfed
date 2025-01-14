@component('mail::message')
**{{'@'.$verify->username}}** さん、こんにちは！


あなたのアカウント申請は承認されました。このお知らせができることを嬉しく思います。

旅はまだはじまったばかりです！あなたからのすばらしい投稿や共有が待ちきれません！

<x-mail::button :url="url('/login?email=' . $verify->email)" color="success">
<strong>さっそくサインインしましょう</strong>
</x-mail::button>

あなたが次にやるべきことを、ここに記しておきますね。

<x-mail::panel>
**プロフィールを完璧にしましょう**: 自分のプロフィールをカスタマイズして、"あなたらしさ"やブランドを主張しましょう。

**投稿を始めましょう**: はじめての写真、アルバム、イラスト、アイデアを投稿し、あなた独自の視点を世界へ発信しましょう。

**コミュニティと出会いましょう**: 他のユーザーをフォローしたり、"お気に入り"やコメントをしたりして、活気に満ちたコミュニティを作り上げましょう。

**探索しましょう**: 世界中のユーザーやハッシュタグを使用して、素晴らしいコンテンツを探しに行きましょう。
</x-mail::panel>

始めるのに助けが必要ですか？ [ヘルプセンター (英語)]({{url('site/help')}}) に行き、ヒントやチュートリアル、よくある質問を探してみましょう。

もし何か質問や補助が必要な場合、お気軽に [こじょん](https://mascodon.jp/@cojohne) へご連絡ください。

楽しい投稿を、さらにもうひとつ。マスコどん！ぴくちゃ へ ようこそ！

よろしくね。<br>
<strong>{{ config('pixelfed.domain.app') }}</strong> より

<br>
<hr>
<p style="font-size:10pt;">このメールは送信専用アドレスより自動送信されています。このメールに返信してもお返事できかねますのでご了承ください。</p>
@endcomponent

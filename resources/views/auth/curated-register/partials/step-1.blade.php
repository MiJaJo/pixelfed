@php
$id = str_random(14);
@endphp
<h1 class="text-center">続ける前に...</h1>
@if(config_cache('app.rules') && strlen(config_cache('app.rules')) > 5)
<p class="lead text-center">サーバーの管理者によって設定された、簡単なガイドラインを確認しましょう。</p>

@include('auth.curated-register.partials.server-rules')
@else
<p class="lead text-center mt-4"><span class="opacity-5">The admins have not specified any community rules, however we suggest youreview the</span> <a href="/site/terms" target="_blank" class="text-white font-weight-bold">利用規約</a> <span class="opacity-5">と</span> <a href="/site/privacy" target="_blank" class="text-white font-weight-bold">プライバシーポリシー</a>.</p>
@endif

<div class="action-btns">
    <form method="post" id="{{$id}}" class="flex-grow-1">
        @csrf
        <input type="hidden" name="step" value="1">
        <button type="button" class="btn btn-primary rounded-pill font-weight-bold btn-block flex-grow-1" onclick="onSubmit()">わかりました！</button>
    </form>

    <a class="btn btn-outline-muted rounded-pill" href="/">もどる</a>
</div>

<div class="small-links">
    <a href="/login">ログイン</a>
    <span>·</span>
    <a href="/auth/sign_up/resend-confirmation">確認を再送信</a>
    <span>·</span>
    <a href="{{route('help.curated-onboarding')}}" target="_blank">ヘルプ</a>
</div>

@push('scripts')
<script>
    function onSubmit() {
        document.getElementById('{{$id}}').submit();
        return;
    }
</script>
@endpush

<h2><span style="opacity:0.5;">さあ、</span> <strong style="opacity: 1">{{ config('pixelfed.domain.app') }}</strong> <span style="opacity:0.5;">のアカウント作成を始めましょう！</span></h2>
<form method="post">
    @csrf
    <input type="hidden" name="step" value="2">
    <div class="my-5 details-form">
        <div class="details-form-field">
            <label class="text-muted small font-weight-bold mb-0">ユーザーID</label>
            <div class="input-group">
                <input
                    type="text"
                    class="form-control form-control-lg bg-dark border-dark text-white"
                    placeholder="ユーザーID"
                    aria-label="Your username"
                    aria-describedby="username-addon"
                    maxlength="15"
                    required
                    name="username"
                    value="{{ request()->session()->get('cur-reg.form-username') }}">
                <div class="input-group-append">
                    <span class="input-group-text bg-dark border-dark text-muted font-weight-bold" id="username-addon">&commat;{{ config('pixelfed.domain.app') }}</span>
                </div>
            </div>
            <p class="help-text small text-muted mb-0">15桁までの文字、数字、アンダーバーが利用できます。"test"などの名称は予約語として登録されており、使用できない場合があります。</p>
        </div>

        <div class="details-form-field">
            <label class="text-muted small font-weight-bold mb-0">メールアドレス</label>
            <input
                type="text"
                class="form-control form-control-lg bg-dark border-dark text-white"
                placeholder="あなたのメールアドレス"
                name="email"
                value="{{ request()->session()->get('cur-reg.form-email') }}"
                required>
        </div>

        <div class="details-form-field">
            <label class="text-muted small font-weight-bold mb-0">パスワード</label>
            <input
                type="password"
                autocomplete="new-password"
                minlength="6"
                class="form-control form-control-lg bg-dark border-dark text-white"
                placeholder="パスワード"
                name="password"
                required>
        </div>

        <div class="details-form-field">
            <label class="text-muted small font-weight-bold mb-0">パスワードの再入力</label>
            <input
                type="password"
                autocomplete="new-password"
                minlength="6"
                class="form-control form-control-lg bg-dark border-dark text-white"
                placeholder="パスワードの再入力"
                name="password_confirmation"
                required>
        </div>
        <div class="border-top border-dark mt-3 pt-4">
            <p class="lead">
                {{ config('pixelfed.domain.app') }}では、管理者やモデレーターが手動でアカウント登録を確認します。登録の助けとなるような、あなた自身のことや利用目的、使いたい理由を記入してください。マスコどん！利用者は、マスコどん！のIDを入力しておくとよいです。
            </p>
        </div>
        <div class="details-form-field">
            <label class="text-muted small font-weight-bold mb-0">あなたのことや、登録したい理由</label>
            <textarea
                class="form-control form-control-lg bg-dark text-white border-dark"
                rows="4"
                name="reason"
                maxlength="1000"
                id="reason"
                placeholder="参加したい理由を簡潔に説明します。必要なら、他のアカウントへのリンクを記載します。最低20文字入力してください。"
                required>{{ request()->session()->get('cur-reg.form-reason') }}</textarea>
            <div class="help-text small text-muted float-right mt-1 font-weight-bold">
                <span id="charCount" class="text-white">0</span>/<span>1000</span>
            </div>
        </div>
        <div class="border-top border-dark mt-3 pt-4">
            <div class="details-form-field">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="agree" name="agree" required>
                    <label class="custom-control-label text-muted" for="agree"><a href="/site/terms" target="_blank" class="text-white">利用規約</a> と <a href="/site/privacy" target="_blank" class="text-white">プライバシーポリシー</a> を確認し、同意します。</label>
                </div>
            </div>
        </div>
        <div class="mt-3 pt-4">
            <button class="btn btn-primary rounded-pill font-weight-bold btn-block">つづける</button>
        </div>
    </div>
</form>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    var textInput = document.getElementById('reason');
    var charCount = document.getElementById('charCount');
    var currentLength = textInput.value.length;
    charCount.textContent = currentLength;

    textInput.addEventListener('input', function () {
        var currentLength = textInput.value.length;
        charCount.textContent = currentLength;
    });
});
</script>
@endpush

@push('styles')
<style type="text/css">
.details-form {
    display: flex;
    gap: 1rem;
    flex-direction: column;
}
</style>
@endpush

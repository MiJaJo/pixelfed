<h2><span style="opacity:0.5;">メールの確認</h2>
@if(isset($verifiedEmail))
<div class="alert alert-success bg-success border-success p-4 text-center mt-5">
    <p class="text-center text-white mb-4"><i class="far fa-envelope-open fa-4x"></i></p>
    <p class="lead font-weight-bold text-white mb-0">入力されたメールアドレスへ、確認のメールを送信しました。メールボックスをチェックして、確認のリンクを押下してください。</p>
</div>
@else
<p class="lead">あなたのメールアドレスが正確な物であることを確認するため、検証用のメールを送信します。アカウント登録を続けるには、メール本文にある検証用のリンクを押下する必要があります。</p>
<form method="post">
    @csrf
    <input type="hidden" name="step" value="3">
    <div class="details-form-field">
          <input
            type="text"
            class="form-control form-control-lg bg-dark border-dark text-white"
            placeholder="あなたのメールアドレス"
            name="email"
            value="{{ request()->session()->get('cur-reg.form-email') }}"
            required>
    </div>
    @if(config('instance.curated_registration.captcha_enabled'))
    <div class="d-flex justify-content-center my-3">
        {!! Captcha::display() !!}
    </div>
    @endif
    <div class="mt-3 pt-4">
        <button class="btn btn-primary rounded-pill font-weight-bold btn-block">確認のメールを送信する</button>
    </div>
</form>
@endif

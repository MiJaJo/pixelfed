@extends('layouts.blank')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-7">
            <div class="logo">
                <img src="/img/pixelfed-icon-color.svg" width="40" height="40" alt="Pixelfed Logo">
                <p class="font-weight-bold mb-0">Pixelfed</p>
            </div>

            @include('auth.curated-register.partials.progress-bar', ['step' => 4])

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger bg-danger border-danger text-white">
                    <p class="lead font-weight-bold mb-0"><i class="far fa-exclamation-triangle mr-2"></i> {{ $error }}</p>
                </div>
                @endforeach
                <div class="mb-5"></div>
            @endif

            <h1 class="text-center font-weight-bold mt-4 mb-3"><i class="far fa-info-circle mr-2"></i> 追加情報リクエスト</h1>
            <p class="h5" style="line-height: 1.5;">あなたの登録を継続するためには、追加の情報が必要です。素早い承認をするために、お早めにご返事ください。</p>
            <hr class="border-dark">
            <p>管理者コメント:</p>
            <div class="card card-body mb-1 bg-dark border border-secondary" style="border-style: dashed !important;">
                <p class="lead mb-0" style="opacity: 0.8">{{ $activity->message }}</p>
            </div>
            <p class="mb-3 small text-muted">このコメントに書かれていることがわからない場合や、追加の説明を要求したい場合は、その旨を返信してください。</p>
            {{-- <hr class="border-dark"> --}}

            <form method="post">
                @csrf
                <input type="hidden" name="crid" value="{{ $activity->register_id }}">
                <input type="hidden" name="acid" value="{{ $activity->id }}">
                <div class="form-group">
                    <label for="message">あなたの返答</label>
                    <textarea
                        class="form-control bg-dark border-dark text-white"
                        rows="4"
                        id="reason"
                        name="response"
                        placeholder="1,000文字以内で返答を入力してください。"
                        maxlength="1000">{{ old('response') }}</textarea>
                    <div class="help-text small text-muted d-flex justify-content-end mt-1 font-weight-bold">
                        <span id="charCount" class="text-white">0</span>/<span>1000</span>
                    </div>
                </div>
                @if($showCaptcha)
                <div class="d-flex justify-content-center my-3">
                    {!! Captcha::display() !!}
                </div>
                @endif
                <div class="text-center">
                    <button class="btn btn-primary font-weight-bold rounded-pill px-5">返答を送信する</button>
                </div>
            </form>
            <hr class="border-dark">
            <p class="text-muted small text-center">For additional information, please see our <a href="{{ route('help.curated-onboarding') }}" style="font-weight: 600;">Curated Onboarding</a> Help Center page.</p>
        </div>
    </div>
</div>
@endsection

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
    <link href="{{ mix('css/landing.css') }}" rel="stylesheet">
    <style type="text/css">
        .gap-1 {
            gap: 1rem;
        }

        .opacity-5 {
            opacity: .5;
        }

        .logo {
            display: flex;
            margin-top: 50px;
            align-items: center;
            justify-content: center;
            gap: 1rem;

            p {
                font-size: 30px;
            }
        }

        .action-btns {
            display: flex;
            margin: 3rem auto 1rem auto;
            flex-direction: row;
            gap: 1rem;

            form {
                flex-grow: 1;
            }
        }

        .small-links {
            display: flex;
            justify-content: center;
            flex-direction: row;
            margin-bottom: 5rem;
            gap: 1rem;

            a {
                color: rgba(255, 255, 255, 0.6);
                font-size: 12px;
            }
        }
    </style>
@endpush

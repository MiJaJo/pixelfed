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

            <p class="text-center"><i class="fal fa-check-circle text-success fa-8x"></i></p>
            <h1 class="text-center font-weight-bold my-4">返答の送信が完了しました！</h1>
            <p class="h4 text-center"><span class="font-weight-bold">これより、管理者やモデレーターによって、あなたの審査が再開されます。</span></p>
            <hr class="border-dark">
            <p class="lead text-center">審査は、おおむね24時間～48時間以内に行われます。アカウントの準備ができた場合は、メールにてお知らせします。</p>
            <p class="text-muted text-center">審査において情報が不足していると判断された場合、追加の情報を入力するためのメールが送信されることがあります。</p>
            <hr class="border-dark">
            <p class="text-muted small text-center">For additional information, please see our <a href="{{ route('help.curated-onboarding') }}" style="font-weight: 600;">Curated Onboarding</a> Help Center page.</p>
        </div>
    </div>
</div>
@endsection

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
            align-items: center;
            flex-direction: row;
            margin-bottom: 5rem;
            gap: 1rem;

            a {
                color: rgba(255, 255, 255, 0.6);
                font-size: 12px;
            }

            span {
                color: rgba(255, 255, 255, 0.4);
            }
        }
    </style>
@endpush

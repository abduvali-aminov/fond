<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

        <div class="modal-wrap">
            <div class="modal-wrap__card">
                <img src="{{ asset('/images/mail.svg') }}" alt="message">
                <h1 class="modal-wrap__title">Мы отправили вам на номер поверждающий код</h1>
                <form method="POST" action="{{ route('verify') }}" >
                    <input type="text" placeholder="Введите код">
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/CSSRulePlugin.min.js"
    integrity="sha512-9F1xsW3TBG87UnyGcF1SrXph249h/eUKPRKJZVhXxW+OeDmCiBvU9/gLfOo5qEvGTjTxOr6YQrY4ImjL90IUyw=="
    crossorigin="anonymous"></script>

    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"
    integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <!-- three js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/108/three.min.js"
    integrity="sha256-3mBEX8I0uMLF7+AUjJeTCelosuorzYpqwBMBPDTyQqY=" crossorigin="anonymous"></script>
    <script>
        gsap.from(".modal-wrap__card", 1, {
            delay: .5,
            opacity: 0,
            x: -800,
            ease: Expo.easeInOut
        })
        gsap.from(".modal-wrap", 1, {
            delay: .3,
            opacity: 0,
            ease: Expo.easeInOut
        })
    </script>
</body>
</html>



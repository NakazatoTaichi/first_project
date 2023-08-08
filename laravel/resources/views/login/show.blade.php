<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style type="text/css">
        body {
            font-family: 'Helvetica Neue',
                Arial,
                "Hiragino Kaku Gothic ProN",
                "Hiragino Sans",
                Meiryo,
                monospace;
        }
        </style>
        <title>My Family</title>
    </head>
    <body>
        <div class="container vh-100">
            <div class="row justify-content-center h-100">
                <div class="card w-25 my-auto shadow">
                    <div class="login-form-head text-center mt-3 mb-2">
                        <h2>ログインフォーム</h2>
                    </div>
                    <div class="login-form-body">
                        <form action="{{route('login.store')}}" method="post">
                            @csrf
                                <div class="form-group mt-3 mb-3">
                                    <label for="email">メールアドレス</label>
                                    <input id="email" type="email" name="email" class="form-control">
                                    @error('email')
                                    <div style="color:red;">
                                        <p>メールアドレスを入力してください。</p>
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mt-3 mb-3">
                                    <label for="password">パスワード</label>
                                    <input id="password" type="password" name="password" class="form-control">
                                    @error('password')
                                    <div style="color:red;">
                                        <p>パスワードを入力してください。</p>
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mt-4 mb-4">
                                    <input type="submit" class="btn btn-primary w-100" value="ログイン" class="form-control">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
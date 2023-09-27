<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pages/connexion.css')}}">
    <script src="{{asset('assets/js/jQuery.js')}}" defer></script>
    <script src="{{asset('assets/js/toastr.min.js')}}" defer></script>
    <script src="{{asset('assets/js/pages/connexion.js')}}" defer></script>
    <title>Responsive Sliding Form</title>
</head>
<body>
    <div class="container">
        <div class="blueBg">
            <div class="box signin">
                <h2>Vous avez déjà un compte ?</h2>
                <button class="signinBtn">Se connecté</button>
            </div>
            <div class="box signup">
                <h2>Vous n'avez pas encore de compte ?</h2>
                <button class="signupBtn">Créer un compte</button>
            </div>
        </div>
        <div class="formBx">
            <div class="form signinForm">
                <form action="" method="post">
                    <h3>Connexion</h3>
                    <input type="text" name="" class="textZone" id="nameSignIn" placeholder="Username">
                    <input type="password" name="" class="textZone" id="passSignIn" placeholder="Password">
                    <div class="checkElement">
                        <input type="checkbox" name="" class="checkZone" id="checkPassSignIn"><label for="checkPassSignIn">Afficher mot de passe</label>
                    </div>
                    <input type="submit" value="Connexion" id="loginBtn">
                    <a class="forgot" href="#">Mot de passe oublié</a>
                </form>
            </div>

            <div class="form signupForm">
                <form action="" method="post">
                    <h3>Enregistrement</h3>
                    <input type="text" name="" class="textZone" id="" placeholder="Username">
                    <input type="password" name="" class="textZone" id="pass" placeholder="Password">
                    <input type="password" name="" class="textZone" id="confPass" placeholder="Confirm Password">
                    <div class="checkElement">
                        <input type="checkbox" name="" class="checkZone" id="checkPassSignUp"><label for="checkPassSignUp">Afficher mot de passe</label>
                    </div>
                    <input type="submit" value="Créer compte">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

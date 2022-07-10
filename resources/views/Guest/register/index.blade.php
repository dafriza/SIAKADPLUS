<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Style -->
    <link rel="stylesheet" href="../../assets/register.css">
    <!-- End of Style -->
</head>
<body>
    <header>
        <img src="https://d33wubrfki0l68.cloudfront.net/13c9a4b570398ec611da4ec48085caaa48c5f2d2/39fb0/logo.svg" alt="logo">
        <h2>SIAKAD+</h2>
    </header>
    <section>
        <form action="../../config/register_action.php" id="form" method="post">
            <label for="nam">Nama</label>
            <input type="text" id="nama" name="nama" required>
            <br>
            <label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" required>
            <br>
            <label for="studi">Studi</label>
            <input type="text" id="studi" name="studi" required>
            <br>
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" required>
            <br>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" required>
            <br>
            <label for="email_kampus">Email Kampus</label>
            <input type="text" name="email_kampus" id="email_kampus" required>
            <br>
            <label for="web">Web</label>
            <input type="text" name="web" id="web" required>
            <br>
            <label for="" id="title_captcha">Captcha</label>
            <div id="captcha"></div>
            <input type="text" required value="sadasd" id="value">
            <br>
            <div id="button">
            </div>
            <!-- <button type="submit">Submit</button> -->
        </form>
    </section>
    <footer>
        Copyright &copy; 2022 Box.it
    </footer>
</body>
</html>
<script>
    // Random String
function random(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() *
 charactersLength));
   }
   return result;
}
// End Of Random String

// Form
let input = document.getElementsByTagName('input');
for (let index = 0; index < input.length; index++) {
    const element = input[index].value="";

}
// End of Form

let captcha = document.getElementById('captcha');
let value = document.getElementById('value');
let title_captcha = document.getElementById('title_captcha');
let button = document.getElementById('button');
let character = random(5);

captcha.innerHTML = character;
console.log(character);
value.addEventListener('keyup', function(){
    if(value.value == character){
        value.style.display = 'none';
        captcha.style.display = 'none';
        title_captcha.style.display = 'none';
        button.innerHTML="<button type='submit'>Submit</button>";
    }else{
    }
});
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surah</title>
    <link rel="stylesheet" href="{{ asset('assets/css/sholli_app.css')}}">
</head>

<body>
    <main class="core">
        <ul class="core-display">
            <li class="core-app back-primer"></li>
        </ul>
    </main>

    <script>
        const shollaTu = "{{request() -> route('nomor')}}";
        fetch('https://equran.id/api/v2/surat/' + shollaTu)
            .then(alpha => {
                return alpha.json();
            })
            .then(bosch => {
                console.log(bosch.data.ayat);
                bosch.data.ayat.forEach(charlie => {
                    let lisan = `<li><span>${charlie.nomorAyat}.</span>${charlie.teksArab}</li>`

                    document.querySelector("ul").insertAdjacentHTML("beforeend", lisan)
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>

</html>
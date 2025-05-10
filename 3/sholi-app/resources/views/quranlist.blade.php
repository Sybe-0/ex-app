<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al-Quran List</title>
    <link rel="stylesheet" href="{{ asset('assets/css/sholli_app.css')}}">
</head>
<body>
    <main class="list">
        <div class="list-table">
            <a class="list-btn-off"></a>
        </div>
    </main>
    <script>
        fetch('https://equran.id/api/v2/surat')
            .then(alpha => {
                return alpha.json();
            })
            .then(list => {
                console.log(list.data);
                list.data.forEach(surat => {
                    let latin = `<a class="list-btn-on back-primer" href="{{ url('surah/${surat.nomor}')}}">${surat.nomor}. ${surat.namaLatin}</a>`

                   document.querySelector('.list-table').insertAdjacentHTML("beforeend", latin)

                });
            })

        .catch(error => console.error('Error:', error));
    </script>
</body>
</html>
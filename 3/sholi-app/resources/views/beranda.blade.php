<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sholli</title>
    <link rel="stylesheet" href="{{ asset('assets/css/sholli_app.css')}}">
</head>
<body>
    <main class="sholli">
        <div class="sholli-display">
            <button class="sholli-btn top-th back-primer" onclick="hrefList()">Al Quran</button>
            <button class="sholli-btn bot-th back-primer">Terakhir Dibaca</button>
            <button class="sholli-btn sid-th back-primer">Pengaturan</button>
        </div>
    </main>
    <script src="{{ asset('assets/js/react_press.js')}}"></script>
</body>
</html>
<!-- resources/views/quote.blade.php -->

<html>
<head>
    <title>Motivacional Cats</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Alegre-ya:400,700|Roboto+Condensed" rel="stylesheet" type="text/css" />
</head>
<body style="background-image: url('/img/{{$quote->background}}')">
    <div class="container">
        <div class="quote-container">
            <p class="text">{{$quote->text}}</p>
            <p class="author">- {{$quote->author}}</p>
        </div>
    </div>
</body>
</html>

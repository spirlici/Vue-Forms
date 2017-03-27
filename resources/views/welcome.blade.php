<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
<div id="app" class="container">
    <router-link to="/">Home</router-link>
    <router-link to="/about">About</router-link>

    <router-view></router-view>

</div>

<script src="/js/app.js"></script>
</body>
</html>
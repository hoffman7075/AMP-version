пример созданной AMP страницы

на основной версии нужно указать ссылку на AMP версию
<link rel="amphtml" href="PATH">

на AMP версии нужно указать canonical на основную
<link rel="amphtml" href="PATH">

В robots.txt скрыть от индексации папку с AMP
Disallow: /amp/*

Для debug в конце url нужно прописать #development=1

пример созданной AMP страницы

на основной версии нужно указать ссылку на AMP версию
```html
<link rel="amphtml" href="PATH">
```

на AMP версии нужно указать canonical на основную

В robots.txt скрыть от индексации папку с AMP
```html
Disallow: /amp/*
```

Для debug в конце url нужно прописать
```html
#development=1
```

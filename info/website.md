# Website Information

### Colors

```
:root {
    --primary: #1F1F1F;
    --secondary: #F5F5F5;
    --primaryAccentLight: #8806D4;
    --primaryAccentDark: #3D0E58;
    --secondaryAccentLight: #06C6C3;
    --secondaryAccentDark: #047775;
}
```

### Font

```
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap");

body {
    font-family: "Roboto", sans-serif;
}
```

### Link CSS with Laravel?

1. Make sure you have the folder `movieApp/public/css`
2. Add your `.css`-file to the folder
3. Go to your `.blade.php`-file and link the css as followed

```
<link rel="stylesheet" href="{{url('css/example.css')}}">
```

Replace `example.css` with the name of your `.css`-file

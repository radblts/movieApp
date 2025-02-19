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

### Link a Page with Laravel?

1. Make a new route in `movieApp\routes\web.php`

```
Route::get('/exampleURI', function () {return view('examplePageName');})
->name('exampleName');
```

-   The URI is how the page is accessed via URL
-   The `examplePageName` has to be the name of the `.blade.php`-file
-   The `exampleName` is being used to call the route

2. Now add the link to the `.blade.php`-file

```
<a href="{{ route('exampleName') }}">testLink</a>
```

-   the `exampleName` corresponds to the name we gave it when we defined the route in `movieApp\routes\web.php`

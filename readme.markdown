# Widgets Library

A helper library that includes methods for generating the HTML for labels, select fields, 
text fields, links, and tables.

## Installation


## Widget Gallery

### Table
Tables can be created from multi-dimentional arrays.  The keys will serve as the titles to
be displayed in the table header.  Additional options may be passed in the options parameter
to be applied to the table element.

__Data in controller passed to the view.__

```php
    $data = [
        ['name' => 'Alex', 'occupation' => 'Engineer'],
        ['name' => 'Judy', 'occupation' => 'Analyst'],
        ['name' => 'Pam', 'occupation' => 'Coach']
    ];
    
    $options = ['class' => 'table'];
```


__Using the table generator inside of the blade template.__


```blade
    {{ Indatus\Widgets\Table::generate($data, $options) }}
```


__The resulting HTML.__


```html
    <table class="table">
        <thead>
        <tr>
                        <td>Name</td>
                        <td>Occupation</td>
                </tr>
        </thead>
        <tbody>
                <tr>
                        <td>Alex</td>
                        <td>Engineer</td>
                    </tr>
                <tr>
                        <td>Judy</td>
                        <td>Analyst</td>
                    </tr>
                <tr>
                        <td>Pam</td>
                        <td>Coach</td>
                    </tr>
            </tbody>
    </table>
```



### Select

__Data in controller passed to the view.__

```php
    $select = [
        'Red' => 1,
        'Orange' => 2,
        'Yellow' => 3,
        'Green' => 4,
        'Blue' => 5,
        'Indigio' => 6,
        'Violet' => 7
    ];
    
    $selected = 5; // Used to set what option will be selected.
```

__Using the select generator inside of the blade template.__


```blade
{{ Indatus\Widgets\Select::generate($select, $selected) }}
```

__The resulting HTML__
```html
    <select>
            <option value="1">Red</option>
            <option value="2">Orange</option>
            <option value="3">Yellow</option>
            <option value="4">Green</option>
            <option value="5" selected="">Blue</option>
            <option value="6">Indigio</option>
            <option value="7">Violet</option>
    </select>
```

### Label and Input

__Using the label and input generator inside of the blade template.__

```blade
    {{ Indatus\Widgets\Label::generate('Email', 'email', ['class' => 'loud']) }}
    {{ Indatus\Widgets\TextField::generate('email', null, ['class' => 'email']) }}
    {{ Indatus\Widgets\TextField::generate('name', 'Steve') }}
```

__The resulting HTML__

```html
    <label for="email" class="loud">Email</label>
    <input type="text" name="email" id="email" class="email">
    <input type="text" name="name" id="name" value="Steve">
```

### Link

__Using the link generator inside of the blade template.__

```blade
    {{ Indatus\Widgets\Link::generate('Google', 'http://google.com/', ['class' => 'outbound']) }}
```

__The resulting HTML__

```html
    <a href="http://google.com/" class="outbound">Google</a>
```

### Assets

__To publish this package's assets to run the artisan publish command targeting this package.__
 
```bash
    php artisan asset:publish indatus/widgets 
```
 
__Then to include the assets use the following inside of your templates__
 
```blade
    {{ Indatus\Widgets\Asset::scripts() }}
    {{ Indatus\Widgets\Asset::styles() }}
```
 
__The resulting HTML__
 

```html
    <script src="http://application-hostname.com/packages/indatus/widgets/widgets.js"></script>
    <link rel="stylesheet" href="http://application-hostname.com/packages/indatus/widgets/widgets.css">
```
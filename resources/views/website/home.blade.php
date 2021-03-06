<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <title>Home Page</title>
    </head>
    <body>
        <!-- A grey horizontal navbar that becomes vertical on small screens -->
        <nav class="navbar navbar-expand-sm bg-light">

            <!-- Links -->
            <ul class="navbar-nav">
                @foreach ($pages as $page)
                    <li class="nav-item">
                        <a class="nav-link" href="/page/{{ $page->id }}">{{ $page->name }}</a>
                    </li>
                @endforeach
                <li class="nav-item">
                    <a class="nav-link" href="/contact-us">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/specials">Add/Edit/Remove Specials</a>
                </li>
            </ul>
        </nav>

        <div>
            @foreach ($specials as $special)
                <div class="col-md-4">
                    <div style="text-align: center">
                        <h4>{{ $special->name }}</h4>
                        <p>Was: ${{ $special->was_price }}</p>
                        <p>Was: ${{ $special->current_price }}</p>
                        <a href="/special/{{ $special->id }}">Click here to view special</a>                
                    </div>
                </div>
            @endforeach
        </div>

        <div>
            {{ $pageDetail -> description }}
        </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Add custom styling specific to this app -->
        <link rel="stylesheet" href="/css/website.css"> 

        <title>Contact Us Page</title>
    </head>
    <body>
        <div id="app"> <!-- Vue.js requires entire page be encapsulated in div#app tags -->
            <!-- A grey horizontal navbar that becomes vertical on small screens -->
            <nav class="navbar navbar-expand-sm bg-light">

                <!-- Links -->
                <ul class="navbar-nav">
                    @foreach ($pages as $page)
                        <li class="nav-item">
                            <a class="nav-link" href="/page/{{ $page->id }}">{{ $page->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>

            <contact-us-form></contact-us-form>  <!-- from website.js -->

            <!-- <div class="container">
                <form method="post" action="/contact-us/sendMsg" class="was-validated">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (isset($successMessage))
                        <div class="alert alert-success">
                            <p>{{ $successMessage[0] }}</p>
                        </div>
                    @endif

                    @csrf

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textArea class="form-control" id="message" placeholder="Enter message" name="message" ></textArea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div> -->
        </div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Add custom js specific to this app -->
        <script src="/js/website.js"></script>
    </body>
</html>
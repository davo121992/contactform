<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible">
            <h6><i class="icon fas fa-check"></i> Success!</h6>
            {{ Session::get('message') }}
        </div>
    @endif
    @if ($errors->count() > 0)
        <div class="alert alert-danger alert-dismissible">
            <h6><i class="icon fas fa-ban"></i> Error!</h6>
            @foreach($errors->all() as $error)
                <p class="errr">{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <section>
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div>
                                <h2>CONTACT US</h2>
                            </div>
                            <form method="post" data-form-title="CONTACT US" action="{{ route('sendEmail') }}">
                                @csrf
                                <input type="hidden" data-form-email="true">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name"  placeholder="Name*" data-form-field="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email"  placeholder="Email*" data-form-field="Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Message" rows="7" data-form-field="Message"></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-lg btn-danger">CONTACT US</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
</html>

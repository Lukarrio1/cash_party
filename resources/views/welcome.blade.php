<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Party App & Api</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,600"
            rel="stylesheet"
        />
    </head>
    <body class="bg-white">
        @include('inc.nav')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron jumbotron-fluid bg-white">
                        <div class="container bg-white">
                            <h1 class="display-4 text-center">Welcome</h1>
                            <p class="lead text-center">
                                This is a website that shows what the Cash party
                                app is about.
                                <br />This is also the api for the app .
                                <br />
                                <button
                                    class="btn btn-primary"
                                    title="Download the app."
                                >
                                    Download
                                </button>
                            </p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-center h1 bg-white">
                                Login
                            </div>
                            <div class="card-body text-center">
                                <img
                                    src="{{
                                        url('/storage/appphotos/login.jpeg')
                                    }}"
                                    style="width: 20%"
                                    alt=""
                                    srcset=""
                                />
                            </div>
                            <div class="card-footer bg-white">
                                <div>
                                    This route is a
                                    <span class="font-weight-bolder">POST</span>
                                    request route and is responsible for logging
                                    in a user. <br />
                                    Route :
                                    <span
                                        class="font-weight-bold h5 text-danger"
                                    >
                                        {{ $login }}
                                    </span>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header text-center h1 bg-white">
                                All Parties
                            </div>
                            <div class="card-body text-center">
                                <img
                                    src="{{
                                        url('/storage/appphotos/parties.jpeg')
                                    }}"
                                    style="width: 20%"
                                    alt=""
                                    srcset=""
                                />
                            </div>
                            <div class="card-footer bg-white">
                                <div>
                                    This route is a
                                    <span class="font-weight-bolder">GET</span>
                                    request route and is responsible for showing
                                    all the parties.
                                    <br />
                                    Route :
                                    <span
                                        class="font-weight-bold h5 text-danger"
                                    >
                                        {{ $parties }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header text-center h1 bg-white">
                                Single party
                            </div>
                            <div class="card-body text-center">
                                <img
                                    src="{{
                                        url('/storage/appphotos/party.jpeg')
                                    }}"
                                    style="width: 20%"
                                    alt=""
                                    srcset=""
                                />
                            </div>
                            <div class="card-footer bg-white">
                                <div>
                                    This route is a
                                    <span class="font-weight-bolder">GET</span>
                                    request route and is responsible for showing
                                    a single party.
                                    <br />
                                    Route :
                                    <span
                                        class="font-weight-bold h5 text-danger"
                                    >
                                        {{ $party }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header text-center h1 bg-white">
                                Create Party
                            </div>
                            <div class="card-body text-center">
                                <img
                                    src="{{
                                        url('/storage/appphotos/update.jpeg')
                                    }}"
                                    style="width: 20%"
                                    alt=""
                                    srcset=""
                                />
                            </div>
                            <div class="card-footer bg-white">
                                <div>
                                    This route is a
                                    <span class="font-weight-bolder">POST</span>
                                    request route and is responsible for adding
                                    a new a party <br />
                                    Route :
                                    <span
                                        class="font-weight-bold h5 text-danger"
                                    >
                                        {{ $store }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header text-center h1 bg-white">
                                Update Party
                            </div>
                            <div class="card-body text-center">
                                <img
                                    src="{{
                                        url('/storage/appphotos/update.jpeg')
                                    }}"
                                    style="width: 20%"
                                    alt=""
                                    srcset=""
                                />
                            </div>
                            <div class="card-footer bg-white"></div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 mb-5">
                        <div class="card">
                            <div class="card-header text-center h1 bg-white">
                                Delete party
                            </div>
                            <div class="card-body"></div>
                            <div class="card-footer bg-white">
                                <div>
                                    This route is a
                                    <span class="font-weight-bolder"
                                        >Delete</span
                                    >
                                    request route and is responsible for
                                    deleting a single party.
                                    <br />
                                    Route :
                                    <span
                                        class="font-weight-bold h5 text-danger"
                                    >
                                        {{ $delete }}
                                    </span>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

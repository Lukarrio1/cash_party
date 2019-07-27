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
                            <div class="card-body">
                                pic goes here
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
                                    <span class="h3">login credentials</span>
                                    <br />{ <br />
                                    email: 'cash@gmail.com', <br />
                                    password: 'cash123' <br />
                                    }
                                </div>
                                <div>
                                    <span class="h3"> Api response:</span>
                                    <br />
                                    { <br />
                                    "data": { <br />
                                    "id": 2,<br />
                                    "name": "cash", <br />
                                    "email": "cash@gmail.com",<br />
                                    "apikey": "lcykfpaest",<br />
                                    "password":
                                    "$2y$10$roaMptCOMZ6h/QRfCtyEue1cap8FAFz0qeYrp9SeaIf3eHFfalfPK",<br />
                                    "created_at": "2019-07-20 00:48:10",<br />
                                    "updated_at": "2019-07-20 00:48:10"<br />
                                    }<br />
                                    }
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header text-center h1 bg-white">
                                All Parties
                            </div>
                            <div class="card-body">
                                pic goes here
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
                                <div>
                                    <span class="h3"> Api response:</span>
                                    <br />
                                    {<br />
                                    "data": [<br />
                                    { "id":1,<br />
                                    "title": "Party one",<br />
                                    "description": "this is going to be a great
                                    party.",<br />
                                    "price": "300",<br />
                                    "img": "hello.jpg",<br />
                                    "user_id": 2,<br />
                                    "created_at": "2019-07-20 01:06:13",<br />
                                    "updated_at": "2019-07-20 01:06:13"<br />
                                    },<br />
                                    {<br />
                                    "id": 2,<br />
                                    "title": "Party two",<br />
                                    "description": "This is going to be way
                                    better than the first party.",<br />
                                    "price": "300",<br />
                                    "img": "hello.jpm",<br />
                                    "user_id": 2,<br />
                                    "created_at": "2019-07-20 01:06:35",<br />
                                    "updated_at": "2019-07-20 01:06:35"<br />
                                    },<br />
                                    ],<br />
                                    "links": {<br />
                                    "first":
                                    "http://cashpartyapp.herokuapp.com/api/parties?page=1",<br />
                                    "last":
                                    "http://cashpartyapp.herokuapp.com/api/parties?page=1",<br />
                                    "prev": null,<br />
                                    "next": null<br />
                                    },<br />
                                    "meta": {<br />
                                    "current_page": 1,<br />
                                    "from": 1,<br />
                                    "last_page": 1,<br />
                                    "path":
                                    "http://cashpartyapp.herokuapp.com/api/parties",<br />
                                    "per_page": 5,<br />
                                    "to": 4,<br />
                                    "total": 4<br />
                                    } }
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header text-center h1 bg-white">
                                Single party
                            </div>
                            <div class="card-body">
                                pic goes here
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
                                <div>
                                    <span class="h3"> Api response:</span>
                                    <br />
                                    {<br />
                                    "data":<br />
                                    { "id":1,<br />
                                    "title": "Party one",<br />
                                    "description": "this is going to be a great
                                    party.",<br />
                                    "price": "300",<br />
                                    "img": "hello.jpg",<br />
                                    "user_id": 2,<br />
                                    "created_at": "2019-07-20 01:06:13",<br />
                                    "updated_at": "2019-07-20 01:06:13"<br />
                                    }<br />
                                    }
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header text-center h1 bg-white">
                                Create Party
                            </div>
                            <div class="card-body">
                                pic goes here
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
                                    <br />
                                    <span class="h3">Party Properties</span>
                                    <br />{ <br />
                                    "title": "Party two",<br />
                                    "description": "this is going to be a great
                                    party.",<br />
                                    "price": 7000,<br />
                                    "img": "party3.jpg", <br />
                                    "key":"lcykfpaest"<br />

                                    }
                                </div>
                                <div>
                                    <span class="h3"> Api response:</span>
                                    <br />
                                    { <br />
                                    "data": { <br />
                                    "status":201 }<br />
                                    }
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header text-center h1 bg-white">
                                Update Party
                            </div>
                            <div class="card-body">
                                pic goes here
                            </div>
                            <div class="card-footer bg-white">
                                <div>
                                    This route is a
                                    <span class="font-weight-bolder">POST</span>
                                    request route and is responsible for
                                    updating a party <br />
                                    Route :
                                    <span
                                        class="font-weight-bold h5 text-danger"
                                    >
                                        {{ $put }}
                                    </span>
                                    <br />
                                    <span class="h3">Party Properties</span>
                                    <br />{ <br />
                                    "title": "Party one",<br />
                                    "description": "this is going to be a great
                                    party.",<br />
                                    "price": 7000,<br />
                                    "img": "party3.jpg", <br />
                                    "key":"lcykfpaest"<br />

                                    }
                                </div>
                                <div>
                                    <span class="h3"> Api response:</span>
                                    <br />
                                    { <br />
                                    "data": { <br />
                                    "status":201 }<br />
                                    }
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3 mb-5">
                        <div class="card">
                            <div class="card-header text-center h1 bg-white">
                                Delete party
                            </div>
                            <div class="card-body">
                                pic goes here
                            </div>
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
                                <div>
                                    <span class="h3"> Api response:</span>
                                    <br />
                                    <br />
                                    "data":<br />
                                    {<br />
                                    "status":200 <br />
                                    }<br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

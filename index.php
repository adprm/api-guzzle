<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request('GET', 'http://www.omdbapi.com', [
    'query' => [
        'apikey' => '9acdfcee',
        's' => 'transformers'
    ]
]);

var_dump($response->getBody()->getContents());

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- costum css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Guzzle Search Movies</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
        <div class="container">
            <a class="navbar-brand" href="#">IMDB API with Guzzle</a>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="font-weight-light text-center">Search Movie</h1>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Movie title..."
                        aria-describedby="button-addon2" id="search-input">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="button" id="search-button">Search</button>
                    </div>
                </div>
                <hr>
                <!-- content -->
                <div class="card-group" id="movie-list">
                    <div class="card-group col-md-4">
                        <div class="card m-2">
                            <img src="" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Year</h6>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><a href="#" class="card-link see-detail" data-toggle="modal"
                                        data-target="#exampleModal" data-id="`+ data.imdbID + `">See Detail</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="card-group col-md-4">
                        <div class="card m-2">
                            <img src="" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Year</h6>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><a href="#" class="card-link see-detail" data-toggle="modal"
                                        data-target="#exampleModal" data-id="`+ data.imdbID + `">See Detail</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="card-group col-md-4">
                        <div class="card m-2">
                            <img src="" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Year</h6>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"><a href="#" class="card-link see-detail" data-toggle="modal"
                                        data-target="#exampleModal" data-id="`+ data.imdbID + `">See Detail</a></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="height: 700px"></div>
                <p class="lead mb-0">https://github.com/adprm</p>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Movie Search</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
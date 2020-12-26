<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!------ Include the above in your HEAD tag ---------->
    <style>
        @import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

        .navbar-icon-top .navbar-nav .nav-link > .fa {
            position: relative;
            width: 36px;
            font-size: 24px;
        }

        .navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
            font-size: 0.75rem;
            position: absolute;
            right: 0;
            font-family: sans-serif;
        }

        .navbar-icon-top .navbar-nav .nav-link > .fa {
            top: 3px;
            line-height: 12px;
        }

        .navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
            top: -10px;
        }

        @media (min-width: 576px) {
            .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
                text-align: center;
                display: table-cell;
                height: 70px;
                vertical-align: middle;
                padding-top: 0;
                padding-bottom: 0;
            }

            .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa {
                display: block;
                width: 48px;
                margin: 2px auto 4px auto;
                top: 0;
                line-height: 24px;
            }

            .navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa > .badge {
                top: -7px;
            }
        }

        @media (min-width: 768px) {
            .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
                text-align: center;
                display: table-cell;
                height: 70px;
                vertical-align: middle;
                padding-top: 0;
                padding-bottom: 0;
            }

            .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa {
                display: block;
                width: 48px;
                margin: 2px auto 4px auto;
                top: 0;
                line-height: 24px;
            }

            .navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa > .badge {
                top: -7px;
            }
        }

        @media (min-width: 992px) {
            .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
                text-align: center;
                display: table-cell;
                height: 70px;
                vertical-align: middle;
                padding-top: 0;
                padding-bottom: 0;
            }

            .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa {
                display: block;
                width: 48px;
                margin: 2px auto 4px auto;
                top: 0;
                line-height: 24px;
            }

            .navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa > .badge {
                top: -7px;
            }
        }

        @media (min-width: 1200px) {
            .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
                text-align: center;
                display: table-cell;
                height: 70px;
                vertical-align: middle;
                padding-top: 0;
                padding-bottom: 0;
            }

            .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa {
                display: block;
                width: 48px;
                margin: 2px auto 4px auto;
                top: 0;
                line-height: 24px;
            }

            .navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa > .badge {
                top: -7px;
            }
        }

    </style>

</head>
<body>
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fa fa-home"></i>
                    Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-envelope-o">
                        <span class="badge badge-danger">11</span>
                    </i>
                    Link
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">
                    <i class="fa fa-envelope-o">
                        <span class="badge badge-warning">11</span>
                    </i>
                    Disabled
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-envelope-o">
                        <span class="badge badge-primary">11</span>
                    </i>
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-bell">
                        <span class="badge badge-info">11</span>
                    </i>
                    Test
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-globe">
                        <span class="badge badge-success">11</span>
                    </i>
                    Test
                </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form method="POST" role="form" action="/userregister">
                @csrf
                <h2>Please Sign Up <small>It's free and always will be.</small></h2>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control input-lg"
                                   value="{{ old('first_name') }}" placeholder="First Name"  tabindex="1">
                            @error('first_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <input type="text" name="last_name" id="last_name" class="form-control input-lg"
                                   value="{{ old('last_name') }}" placeholder="Last Name" tabindex="2">
                            @error('last_name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="display_name" id="display_name" class="form-control input-lg"
                           placeholder="User Name" value="{{ old('display_name') }}" tabindex="3">
                    @error('display_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" value="{{ old('email') }}" tabindex="4">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password"  value="{{ old('password') }}" id="password" class="form-control input-lg"
                           placeholder="password" tabindex="4">
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password_confirmation"  value="{{ old('password_confirmation') }}"
                           id="password_confirmation"
                           class="form-control input-lg"
                           placeholder="confirm_password" tabindex="4">
                    @error('password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="mobile" id="mobile" class="form-control input-lg"
                           placeholder="mobile" tabindex="4" value="{{ old('mobile') }}">
                    @error('mobile')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">

                </div>
                <div class="row">

                    <div class="col-xs-8 col-sm-12 col-md-12">
                        By clicking <strong class="label label-primary">Register</strong>, you agree to the <a
                            href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out
                        by this site, including our Cookie Use.
                    </div>
                </div>

                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary
                     btn-block btn-lg" tabindex="7"></div>
                    <div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Sign In</a></div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
</body>
</html>


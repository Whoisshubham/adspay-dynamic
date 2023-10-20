@extends('admin.layouts.app')
@section('content')
    <style>
        body {
            margin-top: 20px;
            background: #f5f5f5;
        }

        /**
             * Panels
             */
        /*** General styles ***/
        .panel {
            box-shadow: none;
        }

        .panel-heading {
            border-bottom: 0;
        }

        .panel-title {
            font-size: 17px;
        }

        .panel-title>small {
            font-size: .75em;
            color: #999999;
        }

        .panel-body *:first-child {
            margin-top: 0;
        }

        .panel-footer {
            border-top: 0;
        }

        .panel-default>.panel-heading {
            color: #333333;
            background-color: transparent;
            border-color: rgba(0, 0, 0, 0.07);
        }

        form label {
            color: #999999;
            font-weight: 400;
        }

        .form-horizontal .form-group {
            margin-left: -15px;
            margin-right: -15px;
        }

        @media (min-width: 768px) {
            .form-horizontal .control-label {
                text-align: right;
                margin-bottom: 0;
                padding-top: 7px;
            }
        }

        .profile__contact-info-icon {
            float: left;
            font-size: 18px;
            color: #999999;
        }

        .profile__contact-info-body {
            overflow: hidden;
            padding-left: 20px;
            color: #999999;
        }

        .profile-avatar {
            width: 200px;
            position: relative;
            margin: 0px auto;
            margin-top: 196px;
            border: 4px solid #f3f3f3;
        }
    </style>


    <div class="container bootstrap snippets bootdeys bg-white">
        <div class="row">
            <div class="col-xs-12 col-sm-9">
                <form class="form-horizontal submitForm" action="{{ url('admin/profile-update') }}" method="post">
                    @csrf
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="form-group">
                                <label class="ml-3 control-label">Current password</label>
                                <div class="col-sm-12">
                                    <input type="text" name="old_password"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="ml-3 control-label">New password</label>
                                <div class="col-sm-12">
                                    <input type="text" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="ml-3 control-label">Confim password</label>
                                <div class="col-sm-12">
                                    <input type="text" name="confirmed_password"  class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

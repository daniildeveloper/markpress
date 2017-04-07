<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    @yield("title")
                    <small>
                        @yield("subtitle")
                    </small>
                </h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input class="form-control" placeholder="Search for..." type="text">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    Go!
                                </button>
                            </span>
                        </input>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix">
        </div>
    </div>
    <!-- page content -->
    @yield('content')
    <!-- /page content -->
</div>
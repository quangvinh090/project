<div class="header-nav">
    <nav class="navbar navbar-default">
            <div class="navbar-header logo">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1>
                            <a class="navbar-brand" href="index.html">Plunge</a>
                        </h1>
            </div>
            <!-- navbar-header -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @foreach($categories as $parent)
                    <li><a href="http://localhost:8000/user/product/{{$parent->name}}">{{$parent->name}}</a></li>
                    {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thông Tin <b class="caret"></b></a>
                    <ul class="dropdown-menu agile_short_dropdown">
                        <li><a href="">Cá</a></li>
                   </ul> --}}
                    @endforeach
                    
                </ul>
            </div>
            <div class="clearfix"> </div>	
        </nav>
                    <div class="clearfix"> </div>
</div>
<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('partials/_header')
    <!-- Styles -->
    @include('partials/_style')
   {{--  Placeholder comment stuff --}}
    <style type="text/css">
        .thumbnail {
            padding: 0px;
        }
        .panel {
            position: relative;
        }
        .panel>.panel-heading:after,
        .panel>.panel-heading:before {
            position: absolute;
            top: 11px;
            left: -16px;
            right: 100%;
            width: 0;
            height: 0;
            display: block;
            content: " ";
            border-color: transparent;
            border-style: solid solid outset;
            pointer-events: none;
        }
        .panel>.panel-heading:after {
            border-width: 7px;
            border-right-color: #f7f7f7;
            margin-top: 1px;
            margin-left: 2px;
        }
        .panel>.panel-heading:before {
            border-right-color: #ddd;
            border-width: 8px;
        }
    </style>
</head>

<body>
    @include('partials/_navigation-bar')
    <div id ="carousel-background" class = "carousel slide" data-ride ="carousel">
        <ol class = "carousel-indicators">
            <li data-target = "#carousel-background" data-slide-to="0" class = "active"></li>
            <li data-target="#carousel-background" data-slide-to="1"></li>
            <li data-target="#carousel-background" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class = "item active">
               <img src="img/nepal.jpg">
               <div class = "carousel-caption">
                    <h1 id = "welcome-thought">You Are Your Own Thought</h1>
                    <form action="{!!route('home.create')!!}"" method = "GET">
                        <button class="btn btn-default">Post A Thought</button>
                    </form>
               </div>
            </div>
            <div class = "item">
               <img src="img/buddhastatue.jpeg">
               <div class = "carousel-caption">
                   <h1 id = "welcome-thought">Put Your Faith In the Light</h1>
                    <form action="{!!route('home.create')!!}"" method = "GET">
                        <button class="btn btn-default">Post A Thought</button>
                    </form>
               </div>
            </div>
            <div class = "item">
               <img src="img/mtn-yosemite.jpg"> 
               <div class = "carousel-caption">
                   <h1 id = "welcome-thought">Do you require my assistance?</h1>
                    <form action="{!!route('home.create')!!}"" method = "GET">
                        <button class="btn btn-default">Post A Thought</button>
                    </form>
               </div>
            </div>
        </div> {{-- end of carousel inner --}}
        <a class = "left carousel-control" href = "#carousel-background" role = "button" data-slide = "prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class = "right carousel-control" href = "#carousel-background" role = "button" data-slide = "next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


{{--     This is for the icons --}}
    <div class ="icons">
        <div class = "container">
            <h1 style ="margin-bottom: 2%;">Tranquility Is Key To Stability</h1>
            <p></p>
            <div class = "row text-center">
                <div class = "col-md-4" align="center">
                    <h4>Global Change</h4>
                    <div class = "icon-holder">
                        <span class = "glyphicon glyphicon-globe"></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque aliquet purus, eu imperdiet nisl. Donec nec ipsum eu nisl venenatis egestas eget non nibh. Sed ornare consectetur egestas. Cras mattis rhoncus molestie. Nunc placerat hendrerit magna, ac commodo orci scelerisque sit amet. Aliquam erat volutpat. Vivamus ac luctus risus, a consequat dolor. Cras nisl ligula, pellentesque aliquam tortor sit amet, condimentum semper dui.</p>
                </div>
                <div class = "col-md-4" align="center">
                    <h4>Compassion</h4>
                    <div class = "icon-holder">
                        <span class = "glyphicon glyphicon-heart-empty"></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque aliquet purus, eu imperdiet nisl. Donec nec ipsum eu nisl venenatis egestas eget non nibh. Sed ornare consectetur egestas. Cras mattis rhoncus molestie. Nunc placerat hendrerit magna, ac commodo orci scelerisque sit amet. Aliquam erat volutpat. Vivamus ac luctus risus, a consequat dolor. Cras nisl ligula, pellentesque aliquam tortor sit amet, condimentum semper dui.</p> 
                </div>
                <div class = "col-md-4" align="center">
                    <h4>Rhythm</h4>
                    <div class = "icon-holder">
                        <span class = "glyphicon glyphicon-music"></span> 
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque aliquet purus, eu imperdiet nisl. Donec nec ipsum eu nisl venenatis egestas eget non nibh. Sed ornare consectetur egestas. Cras mattis rhoncus molestie. Nunc placerat hendrerit magna, ac commodo orci scelerisque sit amet. Aliquam erat volutpat. Vivamus ac luctus risus, a consequat dolor. Cras nisl ligula, pellentesque aliquam tortor sit amet, condimentum semper dui.</p>             
                </div>
            </div>
        </div>
    </div>

    <div id ="user-input" class="comments-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 style="color: white">World Thoughts</h3>
                </div>
                <!-- /col-sm-12 -->
            </div>
            <!-- /row -->
            <div class="row">
                @foreach($comments as $comment)
                <div class="col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>{{$comment->name}}</strong> <span class="text-muted">commented {{$comment->created_at}}</span>
                        </div>
                        <div class="panel-body">
                            {{$comment->body}}
                        </div>
                        <!-- /panel-body -->
                    </div>
                    <!-- /panel panel-default -->
                </div>
                <!-- /col-sm-5 -->
                @endforeach
            </div>
            <!-- /row -->

            <div class="text-center">
                {!!$comments->links()!!}
            </div>

        </div>
        <!-- /container -->
    </div>

    <footer class = "container-fluid text-center">
        <div class="row">
            <div class ="col-md-4">
                <h3><a href = "#">Contact Me</a></h3>
            </div>
            <div class ="col-md-4">
                <h3>Connect</h3>
                <a href="#" class = "fa fa-facebook"></a>
                <a href="#" class = "fa fa-twitter"></a>
                <a href="#" class = "fa fa-google"></a>
                <a href="#" class = "fa fa-linkedin"></a>
                <a href="#" class = "fa fa-youtube"></a>
            </div>
            <div class ="col-md-4">
                <h3>Careers</h3>
                <h4><a href = "#">Learn More</a></h4>
            </div>
        </div>
    </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
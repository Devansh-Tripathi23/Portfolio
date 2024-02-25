@extends('layout')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-6 my-5 shadow-lg p-5">
            <h1 style="text-align:center;">My Skills</h1>
            <div class="icons">
                <div class="icon d-flex bg-light" >
                <i class="fa-brands fa-html5 icons_styling" style="color:#dd4b25"></i>
                <h2 class="icon_heading">HTML5</h2>
                </div>
           
                <div class="icon d-flex bg-light">
                <i class="fa-brands fa-css3 icons_styling" style="color:#254bdd"></i>
                <h2 class="icon_heading">CSS3</h2>
                </div>
            
            </div>

            <div class="icons">
                <div class="icon d-flex bg-light" >
                <i class="fa-brands fa-js icons_styling" style="color:#efd81d;"></i>
                <h2 class="icon_heading">Js</h2>
                </div>
           
                <div class="icon d-flex bg-light">
                <i class="fa-brands fa-react icons_styling" style="color:#087a9f;"></i>
                <h2 class="icon_heading">React Js</h2>
                </div>
            
            </div>

            <div class="icons">
                <div class="icon d-flex bg-light" >
                <i class="fa-brands fa-node icons_styling" style="color:#6aa05c;"></i>
                <h2 class="icon_heading">Node Js</h2>
                </div>
           
                <div class="icon d-flex bg-light">
                <i class="fa-brands fa-php icons_styling" style="color:#7377ad"></i>
                <h2 class="icon_heading">Php</h2>
                </div>
            
            </div>

            <div class="icons">
                <div class="icon d-flex bg-light" >
                <i class="fa-brands fa-laravel icons_styling" style="color:orangered;"></i>
                <h2 class="icon_heading">Laravel</h2>
                </div>
           
                <div class="icon d-flex bg-light">
                <i class="fa-brands fa-sass icons_styling" style="color:#c76494;"></i>
                <h2 class="icon_heading">Sass</h2>
                </div>
            
            </div>
        </div>

        <div class="col-md-6">
            <div class="shadow-lg my-5 p-5">
            <h1 style="text-align:center;">ADDITIONAL KNOWLEDGE</h1> 
            <ul class="knowledge_list p-5">
                <li><strong><h3>* KNOWLEDGE OF WORDPRESS</h3></strong></li>
                <li><strong><h3>* KNOWLEDGE OF TAILWIND CSS</h3></strong></li>
                <li><strong><h3>* KNOWLEDGE OF SOLIDIY</h3></strong></li>
                <li><strong><h3>* KNOWLEDGE OF BLOCKCHAIN</h3></strong></li>
                <li><strong><h3>* KNOWLEDGE OF LINUX COMMANDS</h3></strong></li>
            </ul>

            <h1 style="text-align:center;">CERTIFICATES</h1> 
            <ul class="p-5">
                <li><strong><h3>REACT JS BY SOLIATRE INFOSYS</h3></strong></li>
            </ul>


            <h1 style="text-align:center;">Contact Links</h1>
            <div style="display:flex;justify-content:center">
            <div class="mx-2"><a href="#" style="font-size:25px;"><i class="fa-brands fa-instagram"></i></a></div>
            <div class="mx-2"><a href="#" style="font-size:25px;"><i class="fa-brands fa-facebook"></i></a></div>
            <div class="mx-2"><a href="#" style="font-size:25px;"><i class="fa-brands fa-linkedin"></i></a></div>
            </div>
            
        </div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card bg-dark text-white my-3">
                <div class="card-body">
                    <div class="card-title">
                    <div class="projects p-2" style="font-size:20px;text-align:center;">Projects Completed</div> 
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card bg-dark text-white my-3">
                <div class="card-body">
                    <div class="card-title">
                    <div class="experience p-2" style="font-size:20px;text-align:center;">Experience</div>
                
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-md-4">
            <div class="card bg-dark text-white my-3">
                <div class="card-body">
                    <div class="card-title">Third </div>
                </div>
            </div>
        </div> -->
        
    </div>
</div>

@endsection
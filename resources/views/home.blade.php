@extends('layouts.app')

@section('content')
<div class="container">
    <!-- .row>.col-3 is create this -->
    <!-- class="rounded-circle" will circle the image -->
    <!-- div*3 will create 3 div's -->
    <!-- font-weight-bold makes it bolder -->
    <div class="row">
        <div class="col-3 pt-3">
            <img src="data:image/png;base64,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" class="rounded-circle">
        </div>
        <div class="col-9 p-5">
            
            <!-- passing the value -->
            <div><h1>{{$user->username}}</h1></div>
              <div class="d-flex">
                <div class="pr-5"><strong>789</strong> Posts</div>
                <div class="pr-5"><strong>580K</strong> Followers</div>
                <div class="pr-5"><strong>200K</strong> Following</div>
              </div>
              <div class="pt-3 font-weight-bold">photoholic.com</div>
              <div>Join in and start uploading pictures</div>
              <div><a link rel="stylesheet" href="#">photoholic.com</a></div>
            
        </div>
    </div>

    <!-- bootstrap has 12 grid so of we need to put 3 three items then we need 4*4*4 col -->
    <!-- class ="w-100" will reszie all the image -->
    <!-- right click and hit inspect and find the image to get the links -->
    <div class="row pt-5">
        <div class="col-4">
              <img src="https://instagram.fdac31-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.120.960.960a/s480x480/81559121_166010994653484_7679389688102043184_n.jpg?_nc_ht=instagram.fdac31-1.fna.fbcdn.net&_nc_cat=100&_nc_ohc=TJI0MEXr6M8AX9KZlnr&oh=8c7fb514750e37a662d13837ca0d86a9&oe=5F39BE39" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fdac31-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.94.756.756a/s640x640/36913809_2092225631015801_2916451775177293824_n.jpg?_nc_ht=instagram.fdac31-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=mhHcVjG7NlcAX95Ebgy&oh=906a94a666d44f242227cc3194829efd&oe=5F38E19D" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fdac31-1.fna.fbcdn.net/v/t51.2885-15/e35/c240.0.960.960a/s320x320/81517650_1494131184078123_5198104108178991623_n.jpg?_nc_ht=instagram.fdac31-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=oxh_KGevnv0AX9H4FtN&oh=c12e6563ab3cc0dd1d984a8f484d00c9&oe=5F3A5565" class="w-100">
        </div>
    </div>

</div>
@endsection

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="{{ URL::asset('css/formValidation.css')}}" rel="stylesheet" type="text/css">    <meta charset="UTF-8">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
    <div class="contact-image">
        <img src="https://visualpharm.com/assets/217/Life%20Cycle-595b40b75ba036ed117d9ef0.svg" alt="rocket_contact"/>
    </div>
    <form method="post" action="{{route("result")}}">
        {{csrf_field()}}
        <h3>Search on Person</h3>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-centered">
                <div class="form-group">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="" />
                </div>

                <div class="form-group">
                    <input type="text" id="ph" name="phone" class="form-control" pattern="[0-9]{10}" placeholder="05XXXXXXXX" title="phone number 10 digit 05XXXXXXXX" />
                </div>

                <div class="form-group">
                    <input type="email" id="t2" name="email" class="form-control" placeholder="Email" value="" />
                </div>

                <div class="form-group">
                    <input type="text" id="name" name="username" class="form-control" placeholder="username" value="" />
                </div>

                <div class="form-group">
                    <input type="tel" id="name" name="id" class="form-control" placeholder="National ID" pattern="[0-9]{10}" title="Enter National ID number 10 digits" />
                </div>

                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Search" />
                </div>
            </div>
        </div>
    </form>
@includeWhen($is_result ,"result_view")
</div>
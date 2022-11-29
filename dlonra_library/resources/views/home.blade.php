@extends('layouts.app')
@section('content')
<section  id="home-sec-top" class="row d-flex align-items-center justify-content-center page-section">
<div class="col-md-4 header-text-div">
    <h1>Ebook <br>that makes <br>a difference</h1>
</div>
<div class="col-md-4 d-none d-md-block">
    
</div>
</section>
<section  class="d-flex align-items-center page-section">
    <div class="row justify-content-center py-5">
        <div class="col-md-4 d-flex">
            <div class="card border-0">
                <div class="card-body">
                  <h2 class="card-title">Brief intro</h2>
                  <p class="card-text">Dlonra's eBooks are created directly from their own published textbook which makes it easier for the student to learn from and gives them chance to be versatile in learning their content. 
                      <br><br>
                      Below is an explainer video of our process when purchasing an ebook</p>
                  <a href="000" class="btn btn-dlonra-red">Get started</a>
                </div>
              </div>
        </div>
        <div class="col-md-4 d-none d-md-block">
            <img src="{{asset('assets/images/brief-intro-image.png')}}" alt="brief-intro-image.png" class="w-100">
        </div>
        
    </div>
</section>
<section class="page-section py-5">
    <h2 class="w-100 text-center mb-5 col-md-12">Buying your eBook</h2>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-1 buying-ebook-div"> 
            <img src="{{asset('assets/icons/go-to-our-website-icon.svg')}}" alt="">
            <p>Visit <a href="www.dlonra.co.za" class="word-break" target="_blank">www.dlonra.co.za</a> to purchase your textbook to receive your coupon.</p>
        </div>
        <div class="col-lg-1 buying-ebook-div"> 
            <img src="{{asset('assets/icons/after-recieving-icon.svg')}}" alt="">
            <p>Register an account on <a href="www.dlonralibrary.co.za" target="_blank" class="word-break">www.dlonralibrary.co.za</a>.</p>
        </div>
        <div class="col-lg-1 buying-ebook-div"> 
            <img src="{{asset('assets/icons/Go-to-www-dlonraacademy-icon.svg')}}" alt="">
            <p>Once logged in locate the left navigation bar and click on redeem.</p>
        </div>
        <div class="col-lg-1 buying-ebook-div"> 
            <img src="{{asset('assets/icons/create-an-account-icon.svg')}}" alt="">
            <p>In the redeem page locate the book you bought and click on the redeem button on the right.</p>
        </div>
        <div class="col-lg-1 buying-ebook-div"> 
            <img src="{{asset('assets/icons/hooray-icon.svg')}}" alt="">
            <p>Punch in your coupon, submit and enjoy your eBook</p>
        </div>
    </div>
</section>
<section  class="row justify-content-center page-section">
    <div class="col-lg-6 row mb-5 justify-content-center">
        <div class="col-md-12  row">
            <h2 class="w-100 text-center mb-2 col-md-12">Go beyond your textbook</h2>
            <div class="col-sm-6 align-bottom">
                <div class="btn btn-dlonra-red btn-beyond" >
                    <table class="w-100">
                        <tr><td>O</td><td>Immersive <br>reading</td></tr>
                    </table>
                </div>
                <div class="btn btn-dlonra-yellow btn-beyond">
                    <table class="w-100">
                        <tr><td>O</td><td>Easy <br>to use</td></tr>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="btn btn-dlonra-orange btn-beyond">
                    <table class="w-100">
                        <tr><td>O</td><td>Interactive <br>engagement</td></tr>
                    </table>
                </div>
                <div class="btn btn-dlonra-red btn-beyond">
                    <table class="w-100">
                        <tr><td>O</td><td>Simple <br>Navigation</td></tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <a href="http://" class="btn btn-dlonra-red ">Get started</a>
        </div>
    </div>
</section>
<section class="page-section">
    <h2 class="w-100 text-center mb-5 col-md-12">Buying your eBook</h2>
    <div class="row d-flex justify-content-center">
        <div class="col-md-2 textbook-div"> 
            <img src="{{asset('assets/images/textbooks/IEL-N1.png')}}" alt="">
            <p> <span class="textbook-title">N1 Industrial<br> Electronics</span><br>Mo Arnold <br>2nd Edition</p>
        </div>
        <div class="col-md-2 textbook-div"> 
            <img src="{{asset('assets/images/textbooks/LOG-N2.png')}}" alt="">
            <p> <span class="textbook-title">N2 Logic<br>Systems</span><br>Mo Arnold <br>2nd Edition</p>
        </div>
        <div class="col-md-2 textbook-div"> 
            <img src="{{asset('assets/images/textbooks/MATHS-N1.png')}}" alt="">
            <p> <span class="textbook-title">N1 Mathematics</span><br>Mo Arnold</p>
        </div>
        <div class="col-md-2 textbook-div"> 
            <img src="{{asset('assets/images/textbooks/DIG-N4.png')}}" alt="">
            <p> <span class="textbook-title">N4 Digital<br> Electronics</span><br>Mo Arnold <br>2nd Edition</p>
        </div>
    </div>
    <div class="text-center">
        <div class="py-5"><a href="/registor" class="btn btn-dlonra-red">Get started</a></div>
    </div>
    
</section>
<section class="page-section py-5 px-3">
    <h2 class="w-100 text-center mb-5 col-md-12">Enquiries</h2>
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 p-3">
            <form action="" method="post">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="" name="nameSurname" placeholder="Full name and surname">
                  </div>
                <div class="form-group mb-3">
                    <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Email address">
                  </div>
                  
                  <div class="form-group mb-3">
                   <textarea name="" id="" cols="30" class="form-control" rows="10" placeholder="Type your enquiry here"></textarea>
                  </div>
                  <div class="form-group text-center my-5">
                    <button type="submit" class="btn btn-dlonra-red">Submit</button>
                   </div>
                  

            </form>
        </div>
    </div>
    
</section>









@endsection

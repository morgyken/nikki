@extends('layouts.solver')

@section('content')

<div class="row row-centered ebayofhomework">
    <div class="col-md-10 col-centered ">

        <section class="cd-intro">
            <h1 class="heading-title cd-headline letters type">
                <span>The <blue>marketplace</blue>for unlocks for </span>
                <span class="cd-words-wrapper">
                    <b class="is-visible"> questions.</b>
                    <b> homework.</b>
                    <b> projects.</b>
                    <b> assignments.</b>
                </span>
            </h1>
        </section>
        <h4 class="heading-title">
            Buy Coursehero Unlocks today and get homework help</h4>
        </div>
        <div class="col-md-6 col-md-offset-3">
        <form  method="POST" action="{{route ('posts')}}">
               {{ csrf_field() }}
            <div class="form-group form-row">
                <textarea name="urlpost" type="text" class="form-control animated fadeIn" maxlength="127" placeholder="Enter UNLOCKS link here"></textarea> 

            </div>
        <div class="form-group form-row">
            
                <input name="email" type="text" id="homepageaskquestion" class="form-control animated fadeIn" maxlength="127" placeholder="Enter your email that will be used in sending the attachment">
            </div>
            <div class="form-group form-row">
             
                <button type="submit" class="btn btn-primary fadeIn button highlight-button homepageasknowbutton"> Continue</button>
            </div>

           
        </form>
        </div>
    </div>

@endsection
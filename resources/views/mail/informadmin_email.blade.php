<div style="width: 50rem;margin-left: auto;margin-right: auto;">
    <div class="row">
        <div style="text-align: center;">
            <a href="{{ url('/') }}" class="mad-logo"><img
                src="https://fantappstic.californiadigitals.com/backend/images/brownieapp_logo.png" class="img-fluid" alt="" style="display:block; margin-left: auto; margin-right: auto;" width="200" height="200" data-auto-embed="attachment"/></a>
        </div>
    </div>
    <p><b>Dear Admin,</b></p>
    <p style="text-align: left;">New company registered successfully.</p>
    <hr style="margin-top: 1rem;
margin-bottom: 1rem;
border: 0;
    border-top-color: currentcolor;
    border-top-style: none;
    border-top-width: 0px;
border-top: 1px solid rgba(0,0,0,.1);">
    <div style="display: flex;flex-wrap: wrap;color: #6c757d;margin-bottom: 1%;">
        <div style="float: left; width: 30%;">Company Name</div>
        <div style="float: right; width: 70%;">{{ $username }}</div>
    </div>
    <div style="display: flex;flex-wrap: wrap;color: #6c757d;margin-bottom: 1%;">
        <div style="float: left; width: 30%;">Message</div>
        <div style="float: right; width: 70%;">{{ $message }}</div>
    </div>
</div>

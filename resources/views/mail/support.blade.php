<html>
    <head>
        <style>
                @font-face {
                font-family: romantically;
                src: url("./fonts/Romantically.otf") format("opentype");
            }
            body{margin: 0;
                 font-family: Open Sans, sans-serif;}
        </style>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div style="width: 700px;margin:0 auto;padding:30px;background: #f3e8e8;border:1px solid #d3d3d3;">
            <div class="row">
                <div style="text-align: center;">
                    <a href="http://www.onlinedocs.us" class="logo" style=" text-decoration:none;"><img src="http://www.onlinedocs.us/img/logo.png" alt="" class="img-fluid" style="max-height: 50px; margin-right: 10px; vertical-align: middle; width: auto;">
                        <span class="text-logo" style="font-size: 8px; margin: 0; padding: 0;line-height: 1; font-weight: 600;
                    letter-spacing: 2px; font-family: romantically; color: #000000; text-decoration: none;">Online Docs<span>
                </a>
            </div>
            <div class="recipent">
                <p>Dear <b>Sir</b>,</p>
                <h4>We have a new enquiry with following details:</h4>
                <p><b>Name:</b> {{$patient_details['name']}}</p>
                <p><b>Email:</b> {{$patient_details['email']}} </p>
                <p><b>Age:</b> {{$patient_details['age']}}</p>
                <h4><b>Answer:</b> {{$patient_answer_details->patient_ans}}</h4>
                @foreach($patient_answer_details->quesansdetails as $answer)
                <p><b>Ques:</b> {{$answer['ques']}}</p>
                <p><b>Ans:</b> {{$answer['patient_answer']}}</p>
                @endforeach
                </div>
            </div>
    </body>
    </html>
